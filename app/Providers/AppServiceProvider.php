<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
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
        View()->composer('component.navigation-profile',function($view){
            if (session()->has('user')) {
                $user = Auth::user();
                $view->with('user',$user);
            }
        });
    }
}
