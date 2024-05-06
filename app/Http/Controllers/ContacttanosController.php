<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContacttanosController extends Controller
{
    //
    public function index(){
        /**
         * compact(): Crea un array que contiene variables y sus valores
         * esta se envia a la vista, el parametro es el objeto creado a partir del Modelo
         * o la variable proveniente de la funcion
         */
        //$cursos = Curso::paginate();
        return view('contactanos.index');
    }

    public function store(Request $request){
        
        //return $request->all();
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'mensaje' => 'required',
        ]);
        $correo = new ContactanosMailAble($request->all());
        Mail::to('fjrodriguez27b@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'correo Enviado');
    }
}
