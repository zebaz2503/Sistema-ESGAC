<?php

namespace App\Http\Controllers;

use App\Anomalias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Canes;

class AnomaliasController extends Controller
{

    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:veterinario,enfermero,operador'
            
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $canes = Canes::all();
        

        //linea modificada para el metodo de buscar
        $datos['anomalias']= Anomalias::name($request->get('name'))->paginate(10);
        //$datos['anomalias']=Anomalias::paginate(5);



        //utilizar la vista
        return view('anomalias.index',$datos, compact('canes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $canes = Canes::all();
        return view('anomalias.create', compact('canes'));
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
////////////////////////Validacion///////////////////////////////////////////
        $campos=[

            'TipoAnomalia' => 'required|string|max:100',
            'Descripcion' =>  'required|string|max:100', 
            'id_can' => 'integer',
            'id_usuario' => 'integer'


        ];
        //dd($request);
        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);

///////////////////////////////////////////////////////////////////////////////////
        $datosAnomalia=request()->except('_token');
        
        Anomalias::insert($datosAnomalia);//almacenar datos en la base de datos


        //return response()->json($datosRaza);
        return redirect('anomalias')->with('Mensaje','Anomalia agregada con éxito!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anomalias  $anomalias
     * @return \Illuminate\Http\Response
     */
    public function show(Anomalias $anomalias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anomalias  $anomalias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        //
        $anomalias= Anomalias::findOrFail($id);

        return view('anomalias.edit', compact('anomalias'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anomalias  $anomalias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $campos=[

            'TipoAnomalia' => 'required|string|max:100',
            'Descripcion' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);
//////////////////////////////////////////////////////////////////////////
        //
        $datosAnomalia=request()->except(['_token','_method']);
        //
        Anomalias::where('id','=',$id)->update($datosAnomalia);

        //consultar la informacion de razas
       // $razas= Razas::findOrFail($id);
        //return view('razas.edit', compact('razas'));
       
        return redirect('anomalias')->with('Mensaje','Anomalia modificada con éxito!!');

    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anomalias  $anomalias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $anomalias= Anomalias::findOrFail($id);
        
        Anomalias::destroy($id); // borrar algun elemento de la base de datos

        //return redirect('razas'); 
        return redirect('anomalias')->with('Mensaje','Anomalia eliminada');
        
        //

    }
}
