<?php

namespace App\Providers;

use App\Contracts\PostRepository;
use App\Repositories\ArrayPostRepository;
use App\Repositories\DbPostRepository;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            PostRepository::class,
            DbPostRepository::class
            //ArrayPostRepository::class
        );
    }
}
