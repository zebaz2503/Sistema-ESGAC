<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Canes;
use App\Alimentacion;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Controller extends BaseController
{

    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:admin'
            
        ]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function imprimir(){

        $canes = Canes::all();
        /*$data = $this->getData();
        $date = date('Y-m-d');*/
        $view = view ('pdf.pdf_canes', compact('canes'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf = \PDF::loadHTML($view);
        return $pdf->stream();

        //return $pdf->download('pdf_canes.pdf');
   }

    public function imprimir_2(){
        
        $alimentacion = Alimentacion::all();
        $view = view('pdf.pdf_comida', compact('alimentacion'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf = \PDF::loadHTML($view);
        return $pdf->stream();
        
    }

    public function imprimir_3(){
        
        $alimentacion = DB::select('SELECT DISTINCT id_usuario, name , sum(racion) as racion from alimentacions group by id_usuario,name');
        $view = view('pdf.pdf_operario', compact('alimentacion'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf = \PDF::loadHTML($view);
        return $pdf->stream();
        
    }

   


}
