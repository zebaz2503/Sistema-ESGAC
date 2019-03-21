<?php

namespace App\Http\Controllers;

use App\Canes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Collective\Html;

class CanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datos['canes']=Canes::paginate(5);

        //$datos['alimentos']= Alimento::name($request->get('name'))->paginate(5);
    
        //utilizar la vista
        return view('canes.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('canes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion

        $campos=[

            'foto_can' =>  'required|max:10000|mimes:jpg,png,jpeg',
            'nombre_can' =>  'required|string|max:100',
            'raza' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'edad' => 'required|string|max:100',
            'peso' => 'required|string|max:100',
            'condicion_cor' => 'required|string|max:100',
            'rer' => 'required|string|max:100',
            'red' => 'required|string|max:100',
            'racion' => 'required|string|max:100',
            'sexo' => 'required|string|max:100',
            'tipo_alimento' => 'required|string|max:100',
            'variables' => 'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);

////////////////////////////////////////////////////////////////////////////////

        $datosCan=request()->except('_token');
        
    
        Canes::insert($datosCan);//almacenar datos en la base de datos


        //return response()->json($datosRaza);
        return redirect('canes')->with('Mensaje','Anomalia agregada con éxito!!');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function show(Canes $canes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $canes= Can::findOrFail($id);
        //return view('canes.edit');
        return view('canes.edit', compact('canes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canes $canes)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canes $canes)
    {
        //
    }
}