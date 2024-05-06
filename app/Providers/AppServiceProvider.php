<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        /**
         * Editar el nombre de las rutas de manera visual en la URL.
         */
        Route::resourceVerbs([
            'create'=> 'crear',
            'edit' => 'editar',
        ]);
    }
}
