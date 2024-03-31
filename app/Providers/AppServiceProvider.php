<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            // Retrieve categories data

            $view
            ->with('main_cat', Category::where('status', 1)->orderBy('id', 'asc')->take(4)->get())
            ->with('sub_cats', Category::where('status', 1)->orderBy('name', 'asc')->get());


        });
    }
}
