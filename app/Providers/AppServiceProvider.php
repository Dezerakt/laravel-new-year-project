<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Letter;
use Illuminate\Support\Facades\View;


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
        $letters_numb = Letter::all()->count();

        View::share('letters_numb', $letters_numb);
    }
}
