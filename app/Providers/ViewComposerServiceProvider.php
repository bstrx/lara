<?php namespace laravel\Providers;

use Illuminate\Support\ServiceProvider;
use laravel\Article;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavBar();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	public function composeNavBar()
	{
		view()->composer('navbar', function ($view) {
			$view->with('latest', Article::latest()->first());
		});
	}
}
