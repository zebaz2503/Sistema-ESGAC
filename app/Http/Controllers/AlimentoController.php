<?php

namespace App\Http\Controllers;

use App\alimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['alimentos']=Alimento::paginate(5);


        //utilizar la vista
        return view('alimentos.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alimentos.create');
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

        $campos=[

            'nombre_alimento' => 'required|string|max:100',
            'grasas' =>  'required|string|max:100',
            'carbohidratos' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);



        $datosAlimento=request()->except('_token');
        
    
        Alimento::insert($datosAlimento);//almacenar datos en la base de datos


        //return response()->json($datosRaza);
        return redirect('alimentos')->with('Mensaje','Anomalia agregada con éxito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alimentos= Alimento::findOrFail($id);

        return view('alimentos.edit', compact('alimentos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $campos=[

            'nombre_alimento' => 'required|string|max:100',
            'grasas' =>  'required|string|max:100',
            'carbohidratos' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);
        
        
        
        
        
        //
        $datosAlimento=request()->except(['_token','_method']);
        //
        
        

        Alimento::where('id','=',$id)->update($datosAlimento);

        //consultar la informacion de razas
       // $razas= Razas::findOrFail($id);
        //return view('razas.edit', compact('razas'));
       
        return redirect('alimentos')->with('Mensaje','Alimento modificado con éxito!!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alimentos= Alimento::findOrFail($id);
        
        Alimento::destroy($id); // borrar algun elemento de la base de datos

        //return redirect('razas'); 
        return redirect('alimentos')->with('Mensaje','Alimento eliminado');
        
    }
}
