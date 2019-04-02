<?php

namespace App\Http\Controllers;

use App\Canes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Collective\Html;
use App\razas;
use App\alimento;

class CanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$datos['canes']=Canes::paginate(5);
        
        $datos['canes']= Canes::name($request->get('name'))->paginate(5);
            //utilizar la vista
        return view('canes.index', $datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $razas = Razas::all();// ver datos de la tabla raza
        $alimentos = Alimento::all();
        //
        return view('canes.create', compact('razas', 'alimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$razas = Razas::all();// ver datos de la tabla raza
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
                
        if ($request->hasFile('foto_can')){//insertar nombre de la foto

            $datosCan['foto_can']=$request->file('foto_can')->store('uploads','public');        
        }//la imagen se almacena en la base de datos y en la carpeta storage

        Canes::insert($datosCan);//almacenar datos en la base de datos

        //return response()->json($datosRaza);
        return redirect('canes')->with('Mensaje','Can agregado con éxito!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $razas = Razas::all();// ver datos de la tabla raza
        $alimentos = Alimento::all();
        //metodo  para mostrar los detalles de cana registro 
        $canes= Canes::findOrFail($id);

        /*if ($canes == null){
            return view('errors.404');
        }*/


        //dd($canes);
        //return view('canes.ver', $canes);
        return view('canes.ver', compact('canes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alimentos = Alimento::all();
        $razas = Razas::all(); //metodo  para recargar las razas de la tabla razas
        ////////////////////////////////////////////////////////////////////////////
        $canes= Canes::findOrFail($id);
        //return view('canes.edit');
        return view('canes.edit', compact('canes','razas', 'alimentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $razas = Razas::all();
        $alimentos = Alimento::all();
        //////////////////////////////////////
        $campos=[

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
//////////////////////////////////////////////////////////////////////////
        $datosCan=request()->except(['_token','_method']);
        //
        if ($request->hasFile('foto_can')){//insertar no,bre de la foto

            $canes= Canes::findOrFail($id);

            Storage::delete('public/'.$canes->foto_can);

            $datosCan['foto_can']=$request->file('foto_can')->store('uploads','public');        
        }//la imagen se almacena en la base de datos y en la carpeta storage

        Canes::where('id','=',$id)->update($datosCan);
       
        return redirect('canes')->with('Mensaje','Can modificado con éxito!!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canes  $canes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $canes= Canes::findOrFail($id);
        
        Canes::destroy($id); // borrar algun elemento de la base de datos
        return redirect('canes')->with('Mensaje','Can eliminado');
    }
}
