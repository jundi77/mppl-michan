<?php

namespace App\Providers;

use App\Guards\AdminGuard;
use App\Guards\PembeliGuard;
use App\Models\Administrator;
use App\Models\Pembeli;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Auth::provider('admin_p', function($app, array $config) {
            return new AdminUserProvider($app->make(Administrator::class));
        });
        Auth::extend('admin', function($app, $name, array $config) {
            return new AdminGuard(Auth::createUserProvider($config['provider']), $app->make('request'));
        });

        Auth::provider('admin_p', function($app, array $config) {
            return new AdminUserProvider($app->make(Administrator::class));
        });
        // Auth::extend('admin', function($app, $name, array $config) {
        //     dd(Auth::createUserProvider($config['provider']));
        //     return new AdminGuard(Auth::createUserProvider($config['provider']), $app->make('request'));
        // });

        Auth::provider('pembeli_p', function($app, array $config) {
            return new PembeliUserProvider($app->make(Pembeli::class));
        });
        Auth::extend('pembeli', function($app, $name, array $config) {
            return new PembeliGuard(Auth::createUserProvider($config['provider']), $app->make('request'));
        });
    }
}
