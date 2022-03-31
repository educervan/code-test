<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserServiceInterface;
use App\Services\UserServiceFactory;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepositoryFactory;

class UserServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserServiceInterface::class,
            function() {
                return (new UserServiceFactory())();
            }
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            function() {
                return (new UserRepositoryFactory())();
            }
        );
    }

}
