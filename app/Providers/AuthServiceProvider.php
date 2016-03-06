<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Model::class => \App\Policies\ModelPolicy::class,
        \App\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // $gate->define('show-post', function($user, $post){
        //     return $user->owns($post);
        //     //return $user->id == $post->user_id;
        // });

        //  $gate->define('update-post', function($user, $post){
        //     return $user->owns($post);
        //     //return $user->id == $post->user_id;
        // });
    }
}
