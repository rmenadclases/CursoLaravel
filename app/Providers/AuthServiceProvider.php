<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;

use App\Policies\PostPolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class => PostPolicy::class,//COn esto emparejamos la politica e importamos la politica.
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
/*
        Gate::define('destroy-post',function(User $user,Post $post){
            return $user->id===$post->user_id;//Esto rerotnara true o false si el id coincide
        });
        */
    }
}
