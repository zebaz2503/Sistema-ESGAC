<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Canes;
use App\anomalias;
use App\razas;
use App\Usuarios;

class PdfController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('pdfs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdfs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//metodo para agregar raza
    {
        
        $request->validate([
            'fecha_inicial' => 'required|date',
            'fecha_final'   => 'required|date',
        
        ]);
 
            $fecha_inicial = Carbon::parse($request->fecha_inicial)
                                    ->startOfDay()
                                    ->toDateTimeString();

            $fecha_final = Carbon::parse($request->fecha_final)
                                    ->endOfDay()
                                    ->toDateTimeString();

        
        $alimentacion = DB::select('SELECT DISTINCT id_can, nombre_can , sum(racion) as racion from alimentacions
        where created_at between ? and ? group by id_can,nombre_can ',[$fecha_inicial,$fecha_final]);

        $view = view('pdfs.pdfs_fechas', compact('alimentacion','fecha_inicial','fecha_final'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf = \PDF::loadHTML($view);
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
   
    

}
