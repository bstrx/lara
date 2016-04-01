<?php namespace laravel\Http\Controllers;

use Carbon\Carbon;
use laravel\Article;
use laravel\Http\Controllers\Controller;
use laravel\Http\Requests\ArticleRequest;
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
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        $user = $request->user();
        if ($user) {
            /** @var User $user */
            $user->articles()
                ->save(new Article($request->all()));
        }

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        flash('Your message was updated');

        return redirect('articles');
    }
}
