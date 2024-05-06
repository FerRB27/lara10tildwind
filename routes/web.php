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
    Route::get('curso/create', 'create')->name('cursos.create');
    /**
     * Esta ruta (show) se usa en la view de index.blade
     */
    Route::get('curso/{curso}', 'show')->name('cursos.show');
});

######################################## Ruta para procesar el Form de Nuevo CURSOS ########################################

Route::post('curso',[CursoController::class, 'store'])->name('curso.store');

######################################## Ruta para Acceder al form de Actualizar CURSOS ########################################

Route::get('curso/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

######################################## Ruta para procesar el Form de Actualizar CURSOS ########################################

Route::put('curso/{curso}',[CursoController::class, 'update'])->name('curso.update');
