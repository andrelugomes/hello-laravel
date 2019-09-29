<?php

namespace App\Providers;


use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Project' => 'App\Policies\ProjectPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        //use Illuminate\Auth\Access\Gate;
        //boot(Gate $gate)

        //if before() is true, skip all polices.
        //else follow the next policy $policies

        /*$gate->before(function ($user)) {
            // Is $user an ADMIN? Skip policy
        });*/
    }
}
