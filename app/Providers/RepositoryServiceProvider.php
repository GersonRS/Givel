<?php

namespace Givel\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(
            'Givel\Repositories\CategoryRepository',
            'Givel\Repositories\CategoryRepositoryEloquent'
        );
        $this->app->bind(
            'Givel\Repositories\ProductRepository',
            'Givel\Repositories\ProductRepositoryEloquent'
        );
    }
}
