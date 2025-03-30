<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\User;
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
            $user=User::find(1);
            $view->with('user',$user);
        });
    }
}
