<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Policies\Admin\ProjectPolicy;
use App\Policies\Admin\TaskPolicy;
use App\Policies\Admin\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Project::class => ProjectPolicy::class,
        Task::class => TaskPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Passport::tokensExpireIn(now()->endOfDay());
        Passport::refreshTokensExpireIn(now()->addDays(30)->endOfDay());
        Passport::personalAccessTokensExpireIn(now()->addMonths(6)->endOfDay());
    }
}
