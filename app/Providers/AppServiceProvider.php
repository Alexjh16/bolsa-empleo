<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //registras cosas en el service container unicamente
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //se puede usar para los servicios de laravel, se usa despues que los services han sido registrados
        //se pueden usar inyeccion de dependencias
        Model::preventLazyLoading();
        //Gate::define('edit-job', function(User $user, Job $job){
          //  return $job->employer->user->is($user);
        //});
    }
}
