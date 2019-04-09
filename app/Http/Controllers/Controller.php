<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Canes;


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



}
