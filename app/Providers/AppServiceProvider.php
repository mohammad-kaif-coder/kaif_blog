<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Admin\Profile;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void 
    {
        view()->composer(
            'layouts.admin.master', 
            function ($view) {
                $view->with('profile',Profile::first());
            }
        );
    }

}
