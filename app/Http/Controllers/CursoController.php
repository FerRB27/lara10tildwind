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
        //$cursos = Curso::paginate();
        $cursos = Curso::orderby('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Funcion Create
     */
    public function create(){
        return view('cursos.create');
    }

    /**
     *  Crear una instancia del Modelo y pasarlo como pparametro
     *  en la funcion, ayudara a obtener todos los valores de dicho objeto.
     *  En caso de nombrar solo la variable (No instanciarla), esta tomara el valor asignado
     *  o utilizado en las rutas (archivo routes/web.php)
     */
    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }

    /**
     * Metodo para guardar datos del form Curso
     */
    public function store(Request $request){
        //return $request->all();
        /**
         * Metodo Validate permite validar que los valores no lleguen vacios
         * en los formularions, este metodo se complementa con una alerta visual en 
         * la vista create.blade.php a travez del @error() @enderror()
         */
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        //$curso = new Curso();

        // Filter_var + FILTER_SANITIZE_STRING Ayuda a limpiar inyecciones de codigo HTML en campos de texto
        
        //$curso->name = $request->name;
        //$curso->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        //$curso->description = filter_var($request->description, FILTER_SANITIZE_STRING);
        //$curso->category = filter_var($request->category, FILTER_SANITIZE_STRING);
        //$curso->description = $request->description;
        //$curso->category = $request->category;
        //$curso->save();
        /**
         * Considere asi tambien na asignacion masiva para
         * formularios con demasiados campos. No necesitamos ejecutar el comando save;
         */
        $curso = Curso::create(filter_var_array($request->all(), FILTER_SANITIZE_STRING));
        return redirect()->route('curso.show', $curso);
    }
    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        /**
         * Metodo Validate permite validar que los valores no lleguen vacios
         * en los formularions, este metodo se complementa con una alerta visual en 
         * la vista create.blade.php a travez del @error() @enderror()
         * Descargar lenguaje en español con compando consola
         * 1) composer require laravel-lang/common --dev
         * 2) php artisan lang:add es
         */
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        //$curso->name = $request->name;
        //$curso->description= $request->description;
        //$curso->category = $request->category;

        // Filter_var + FILTER_SANITIZE_STRING Ayuda a limpiar inyecciones de codigo HTML en campos de texto
        //$curso->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        //$curso->description = filter_var($request->description, FILTER_SANITIZE_STRING);
        //$curso->category = filter_var($request->category, FILTER_SANITIZE_STRING);
        
        //$curso->save();

        /**
         * Considere asi tambien na asignacion masiva para
         * formularios con demasiados campos. No necesitamos ejecutar el comando save;
         */
        $curso->update(filter_var_array($request->all(), FILTER_SANITIZE_STRING));
        return redirect()->route('curso.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('curso.index', $curso);
    }
}
