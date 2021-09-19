<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
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
      Model::unguard();
      
      Gate::define('super-admin', function (User $user) {
        return $user->role === "super admin";
      });
      Gate::define('admin', function (User $user) {
        return $user->role === "super admin" or $user->role === "admin";
      });

      Blade::if('admin', function () {
        if ( request()->user() ) {
          return request()->user()->can('admin');
        }
      });
    }
}
