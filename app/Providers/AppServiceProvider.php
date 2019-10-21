<?php

namespace App\Providers;

use App\Category;
use App\Project;
use App\Settings;
use App\User;
use View;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        View::share('setting',Settings::all()->first());
        View::share('user',User::all()->first());
        view::share('projects',Project::paginate(10));
        View::share('categories',Category::all());
    }
}
