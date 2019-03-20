<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html;

class alimento extends Model
{
    //

//metodo de busqueda con Eloquent

public function scopeName($query, $name){

    if(trim($name) != ""){
        $query->where(\DB::raw("CONCAT(nombre_alimento,' ')"), "LIKE", "%$name%");
    }
    //$query->where('nombre_alimento',$name);

}


}
