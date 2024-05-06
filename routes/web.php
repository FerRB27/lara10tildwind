<?php

use App\Http\Controllers\ContacttanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailAble;
use Illuminate\Support\Facades\Mail;

//Route::get('/', function () {
//    return view('welcome'); 
//});

Route::get('/',HomeController::class)->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
//Route::get('cursos', [CursoController::class, 'index']);

//Route::get('cursos/create', [CursoController::class, 'create']);

//Route::get('cursos/{curso}', [CursoController::class, 'show']);

/**
 *  Creacion de rutas agrupadas
 */

// Route::controller(CursoController::class)->group( function(){
//     Route::get('curso', 'index')->name('cursos.index');
//     Route::get('curso/create', 'create')->name('cursos.create');
//     /**
//      * Esta ruta (show) se usa en la view de index.blade
//      */
//     Route::get('curso/{curso}', 'show')->name('cursos.show');
// });

// ######################################## Ruta para procesar el Form de Nuevo CURSOS ########################################

// Route::post('curso',[CursoController::class, 'store'])->name('curso.store');

// ######################################## Ruta para Acceder al form de Actualizar CURSOS ########################################

// Route::get('curso/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

// ######################################## Ruta para procesar el Form de Actualizar CURSOS ########################################

// Route::put('curso/{curso}',[CursoController::class, 'update'])->name('curso.update');

// ######################################## Ruta para Eliminar CURSOS ########################################

// Route::delete('curso/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');
/**
 * Agrupar rutas  con Route::resource, y ajustar la visibilidad de su nombre
 * en el artivo (app/providers/AppServiceProviders.php) con  la funucion Route::resourceVerbs
 */
Route::resource('curso', CursoController::class);

//Ruta apra enviar correos

// Route::get('contactanos', function(){
//     $correo = new ContactanosMailAble;
//     Mail::to('fjrodriguez27b@gmail.com')->send($correo);

//     return  "Correo Enviado";
// })->name('contactanos.index');

// ######################################## Ruta para Acceder al formulario de contacto ########################################

Route::get('contactanos',[ContacttanosController::class, 'index'])->name('contactanos.index');

############ RUTA PARA PROCESAR EL FORMULARIO DE CONTACTO
Route::post('contactanos',[ContacttanosController::class, 'store'])->name('contactanos.store');