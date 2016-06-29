<?php

namespace Emiolo\Providers;

use Illuminate\Support\ServiceProvider;
use Emiolo\Repositories\User\UserRepository;
use Emiolo\Repositories\User\UserRepositoryEloquent;

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
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        //:end-bindings:
    }

}
