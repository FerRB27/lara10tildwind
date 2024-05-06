<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso';

    protected $fillable =[
        'name',
        'description',
        'category'
    ];

    protected function name():Attribute{
        return new Attribute(

            /**
             * La funcion de accesor es mostrar la primera letra de cada nombre
             * en Maysucula en la vista de los datos, sin importar que se haya guardado
             * todo en minusculas o todo en mayusculas. Esto es por medio de la opcion "ucwords"
             */
            //Accesor
            get: function($value){
                return ucwords($value);
            },

            /**
             * El Mutador previene la insercion de etiquetas html en este campo "name"
             * al insertar de manera masiva. Esta funcion quedara omentada ya que a mi parecer
             * esto deberia hacerce por cada campo usando este modelo, pero optimizo el codigo
             * usando la funucion  filter_var_array enn el controlador, haciendo la insercion
             * (EN CASO DE USAR LA FUNCION, NO OLVDAR AGREGAR UNA COMA AL FINAL DELL ACCESOR)
             
             *   set: function($value){
             *       return strtolower(filter_var($value, FILTER_SANITIZE_STRING));
             *   }
             */
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
