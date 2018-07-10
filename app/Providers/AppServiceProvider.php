<?php

namespace SON\Providers;

use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() != 'production') {
        	$this->app->register (\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

	    $this->app->extend(FakerGenerator::class, function (){
		    return FakerFactory::create('pt_BR');
	    });
    }
}
