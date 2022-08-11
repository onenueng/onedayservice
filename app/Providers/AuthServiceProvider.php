<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Bed;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('index-bed', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('create-bed', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('store-bed', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('destroy-bed', function (User $user, Bed $bed) {
            return $user->admin // $user->sap_id === '12345678'
                && $bed->bookings->count() === 0;
        });
    }
}
