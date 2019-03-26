<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class razas extends Model
{
    //


    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(nombre,' ')"), "LIKE", "%$name%");
        }
        //$query->where('TipoAnomalia',$name);
    
    }
    




}
