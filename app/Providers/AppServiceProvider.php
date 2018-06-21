<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Section;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('count_m', $count_m = Section::count());
        view()->share('section_m', $section_m = Section::where('status', 'ACTIVE')->get());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
