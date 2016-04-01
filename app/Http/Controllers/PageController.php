<?php namespace laravel\Http\Controllers;

use laravel\Http\Requests;
use laravel\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function about()
    {
        $name = 'Vladimir';
        $last = 'Prudilin';

        return view('pages.about')->with(['name' => $name, 'last' => $last]);
    }
}
