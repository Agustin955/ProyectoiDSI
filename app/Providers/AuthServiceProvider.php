<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->roles->first()->slug == 'admin';
        });

        Gate::define('isOperativo', function ($user) {
            return $user->roles->first()->slug == 'operativo';
        });

        // Gate::define('isContentEditor', function ($user) {
        //     return $user->roles->first()->slug == 'content-editor';
        // });
        
    }
}
