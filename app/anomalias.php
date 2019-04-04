<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html;

class anomalias extends Model
{
    //


//metodo de busqueda con Eloquent

public function scopeName($query, $name){

    if(trim($name) != ""){
        $query->where(\DB::raw("CONCAT(TipoAnomalia,' ')"), "LIKE", "%$name%");
    }
    //$query->where('TipoAnomalia',$name);

}

public function id_can(){
        return $this->belongsTo(Canes::class);
}


}
