<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\User;
use App\Observers\AdminAuth;
use App\Observers\UserAuth;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserAuth::class);
        Admin::observe(AdminAuth::class);
    }
}
