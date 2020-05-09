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
        
        Gate::define('validasi',function($user){
            return $user->unVerified();
        });

        Gate::define('assign',function($mahasiswa){
            return $mahasiswa->unAssign();
        });

        Gate::define('register-users',function($user){
            return $user->hasRole('koordinator');
        });

        Gate::define('koordinator',function($user){
            return $user->hasRole('koordinator');
        });

        Gate::define('manage-users',function($user){
            return $user->hasAnyRoles(['koordinator','dosen pembimbing']);
        });

        Gate::define('mahasiswa',function($user){
            return $user->hasRole('mahasiswa');
        });

        Gate::define('dosen',function($user){
            return $user->hasRole('dosen pembimbing');
        });

        Gate::define('edit-users',function($user){
            return $user->hasRole('koordinator');
        });

        Gate::define('delete-users',function($user){
            return $user->hasRole('koordinator');
        });
        //
    }
}
