<?php

namespace App\Providers;

use App\Models\User;
use App\Repositories\LoginAdm\LoginAdmEloquentRepository;
use App\Repositories\LoginAdm\LoginAdmRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(
        LoginAdmRepository::class,
        function ($app) {
            return new LoginAdmEloquentRepository(new User());
        }
       );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
