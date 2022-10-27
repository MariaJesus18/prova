<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use App\Models\cadUser;
use App\Policies\cadUserPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\User' => 'App\Policies\UserPolicy',
    ];
    

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       
        //aqui eu utilizei o UserPolicy (para resource)
        //adicionei uma nova regras
        Gate::define('superAdmin', [UserPolicy::class, 'superAdmin']);
       
        Gate::define('view', [TaskPolicy::class, 'viewAny']);
        Gate::define('edit', [TaskPolicy::class, 'edit']);
         Gate::define('superAdmin', [cadUserPolicy::class, 'superAdmin']);
        Gate::define('view', [cadUserPolicy::class, 'view']);
    }
}
