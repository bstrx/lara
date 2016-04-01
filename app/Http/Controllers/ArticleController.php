<?php namespace laravel\Http\Controllers;

use Carbon\Carbon;
use laravel\Article;
use laravel\Http\Controllers\Controller;
use laravel\Http\Requests\ArticleRequest;
use laravel\Tag;
use laravel\User;

class ArticleController extends Controller
{


	public function index()
    {
        //$articles = Article::latest()->published()->get();
        $articles = Article::latest()->get();
        return view('article.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    public function create()
    {
        $tags = Tag::all()->lists('name', 'id');

        return view('article.create', ['tags' => $tags]);
    }

    public function store(ArticleRequest $request)
    {
        $user = $request->user();
        if ($user) {
            /** @var Article $article */
            $article = $user->articles()->create($request->all());

            $article->tags()->attach($request->input('tag_list'));
        }

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        $tags = Tag::all()->lists('name', 'id');

        return view('article.edit', ['article' => $article, 'tags' => $tags]);
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
