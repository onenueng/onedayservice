<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Bed;
use App\Models\Procedure;

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
        Gate::define('show-bed', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('edit-bed', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('destroy-bed', function (User $user, Bed $bed) {
            return $user->admin // $user->sap_id === '12345678'
                && $bed->bookings->count() === 0;
        });

        //clinic
        Gate::define('index-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('create-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('store-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('show-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('edit-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('destroy-clinic', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678'

        });

        //procedure
        Gate::define('index-procedure', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('create-procedure', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('store-procedure', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('show-procedure', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('edit-procedure', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('destroy-procedure', function (User $user, Procedure $procedure) {
            return $user->admin // $user->sap_id === '12345678'
            && $procedure->bookings->count() === 0;

        });

         //room
         Gate::define('index-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('create-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('store-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('show-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('edit-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678';
        });
        Gate::define('destroy-room', function (User $user) {
            return $user->admin; // $user->sap_id === '12345678'

        });

    }
}
