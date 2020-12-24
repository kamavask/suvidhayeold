<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
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
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define(
            'manage-users', function ($user) {
                return $user->hasAnyRoles(['employee', 'admin', 'developer']);
        });

        Gate::define(
            'access-dashboard', function ($user) {
                return $user->hasAnyRoles(['employee', 'admin', 'developer']);
        });

        Gate::define(
            'customer', function ($user) {
                return $user->hasRoles('customer');
        });

        Gate::define(
            'view_home', function ($user) {
                return $user->hasAnyRoles(['customer', 'deliverymen', 'servicemen', 'vendor']);
        });

        Gate::define(
            'super-admin', function ($user) {
                return $user->hasRole('admin');
        });

        Gate::define(
            'delete-users', function ($user) {
                return $user->hasRole('admin');
        });
    }
}
