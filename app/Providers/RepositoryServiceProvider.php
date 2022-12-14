<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\ServiceInterface\UserServiceInterface;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class,UserRepository::class);

    }
}
