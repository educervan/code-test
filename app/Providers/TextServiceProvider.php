<?php

namespace App\Providers;

use App\Repositories\TextRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\TextServiceInterface;
use App\Services\TextServiceFactory;
use App\Repositories\TextRepositoryFactory;

class TextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TextServiceInterface::class,
            function() {
                return (new TextServiceFactory())();
            }
        );

        $this->app->bind(
            TextRepositoryInterface::class,
            function() {
                return (new TextRepositoryFactory())();
            }
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
