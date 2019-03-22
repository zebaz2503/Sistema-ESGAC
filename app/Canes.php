<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html;


class Canes extends Model
{
    //
 

public function scopeName($query, $name){

    if(trim($name) != ""){
        $query->where(\DB::raw("CONCAT(nombre_can,' ')"), "LIKE", "%$name%");
    }


    }


}
