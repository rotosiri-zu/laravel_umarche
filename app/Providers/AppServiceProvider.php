<?php

namespace App\Providers;

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
        // ownerから始まるURL 
        if (request()->is('owner*')) {
            conﬁg(['session.cookie' => conﬁg('session.cookie_owner')]);
        }
        // adminから始まるURL 
        if (request()->is('admin*')) {
            conﬁg(['session.cookie' => conﬁg('session.cookie_admin')]);
        }
    }
}
