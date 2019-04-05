<?php

namespace App\Http\Controllers;

use App\Alimentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Collective\Html;
use App\Canes;

class AlimentacionController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:operador'
            
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $canes = Canes::all();// ver datos de la tabla raza
        $datos['canes']= Canes::name($request->get('name'))->paginate(5);
        //
        
        //
        return view('alimentacion.index', $datos,  compact('canes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alimentacion  $alimentacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $canes= Canes::findOrFail($id);
        return view('alimentacion.ver', compact('canes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alimentacion  $alimentacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimentacion $alimentacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alimentacion  $alimentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alimentacion $alimentacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alimentacion  $alimentacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimentacion $alimentacion)
    {
        //
    }
}
