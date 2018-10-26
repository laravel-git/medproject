<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-login', function ($user) {
            return $user->is_admin == 1;
        });

        Gate::define('cashier-login', function ($user) {
            return $user->is_cashier == 1;
        });
        Gate::define('doctor-login', function ($user) {
            return $user->is_doctor == 1;
        });
    }
}
