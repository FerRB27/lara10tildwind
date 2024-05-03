<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Route::get('/', function () {
//    return view('welcome'); 
//});

Route::get('/',HomeController::class);

//Route::get('cursos', [CursoController::class, 'index']);

//Route::get('cursos/create', [CursoController::class, 'create']);

//Route::get('cursos/{curso}', [CursoController::class, 'show']);

/**
 *  Creacion de rutas agrupadas
 */

Route::controller(CursoController::class)->group( function(){
    Route::get('curso', 'index')->name('cursos.index');
    Route::get('curso/create', 'create');
    /**
     * Esta ruta (show) se usa en la view de index.blade
     */
    Route::get('curso/{curso}', 'show')->name('cursos.show');
});