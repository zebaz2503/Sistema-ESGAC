<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //

    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(nombres, apellidos, cedula,' ')"), "LIKE", "%$name%");
        }
        //$query->where('TipoAnomalia',$name);
    
    }
    
}
