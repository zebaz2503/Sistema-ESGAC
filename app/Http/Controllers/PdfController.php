<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canes;
use App\anomalias;
use App\razas;
use App\Usuarios;

class PdfController extends Controller
{
    //
    public function index()
    {
        $canes = Canes::all();
        $anomalias= anomalias::all();
        $razas = razas::all();
        
        return view("");
    }

    public function CrearPDF(){

        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.pdf_canes', compact('data', 'date', 'CrearPDF'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('CrearPDF');
    }

    public function crear_reporte_canes(){

        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;

    }

}
