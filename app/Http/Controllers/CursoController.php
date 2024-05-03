<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     *  Funcion Index brinda el listado de los cursos
     *  por medio de la funcion paginate() que es un paginador y
     *  reemplaza la opcion All() haciendo de la misma mas eficiente al cargar
     *  los resultados
     */
    public function index(){
        /**
         * compact(): Crea un array que contiene variables y sus valores
         * esta se envia a la vista, el parametro es el objeto creado a partir del Modelo
         * o la variable proveniente de la funcion
         */
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Funcion Create
     */
    public function create(){
        return view('cursos.create');
    }

    /**
     * Funcion Show
    *public function show($curso){
     *   /**
         * compact(): Crea un array que contiene variables y sus valores
         * esta se envia a la vista,, el parametro es el objeto creado a partir del Modelo
         * o la variable proveniente de la funcion
         
        *return view('cursos.show', compact('curso'));
    *}
    */

    /**
     *  Crear una instancia del Modelo y pasarlo como pparametro
     *  en la funcion, ayudara a obtener todos los valores de dicho objeto.
     *  En caso de nombrar solo la variable (No instanciarla), esta tomara el valor asignado
     *  o utilizado en las rutas (archivo routes/web.php)
     */
    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }
}
