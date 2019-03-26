<?php

namespace App\Http\Controllers;

use App\Razas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos['razas']=Razas::paginate(5);

        $datos['razas']= Razas::name($request->get('name'))->paginate(5);


        //utilizar la vista
        return view('razas.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('razas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//metodo para agregar raza
    {
        //
        //$datosRaza=request()->all();

        $campos=[

            'Nombre' => 'required|string|max:100',
            'Descripcion' =>  'required|string|max:100',
            'Foto' =>  'required|max:10000|mimes:jpg,png,jpeg',
        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);
        
        
        
        
        
        $datosRaza=request()->except('_token');
        
        if ($request->hasFile('Foto')){//insertar no,bre de la foto

            $datosRaza['Foto']=$request->file('Foto')->store('uploads','public');        
        }//la imagen se almacena en la base de datos y en la carpeta storage

        Razas::insert($datosRaza);//almacenar datos en la base de datos


        //return response()->json($datosRaza);
        return redirect('razas')->with('Mensaje','Razas canina agregada con éxito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function show(Razas $razas)
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
        $razas= Razas::findOrFail($id);

        return view('razas.edit', compact('razas'));
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

        $campos=[

            'Nombre' => 'required|string|max:100',
            'Descripcion' =>  'required|string|max:100',
            //'Foto' =>  'required|max:10000|mimes:jpg,png,jpeg',
        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);

////////////////////////////////////////////////////////////////////////////////////

        $datosRaza=request()->except(['_token','_method']);
        //
        
        if ($request->hasFile('Foto')){//insertar no,bre de la foto

            $razas= Razas::findOrFail($id);

            Storage::delete('public/'.$razas->foto);

            $datosRaza['Foto']=$request->file('Foto')->store('uploads','public');        
        }//la imagen se almacena en la base de datos y en la carpeta storage

        Razas::where('id','=',$id)->update($datosRaza);

        //consultar la informacion de razas
       // $razas= Razas::findOrFail($id);
        //return view('razas.edit', compact('razas'));
       
        return redirect('razas')->with('Mensaje','Razas canina modificada con éxito!!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Razas  $razas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $razas= Razas::findOrFail($id);

        if (Storage::delete('public/'.$razas->foto)){

            Razas::destroy($id); // borrar algun elemento de la base de datos
        }
        

        //return redirect('razas'); 
        return redirect('razas')->with('Mensaje','Razas canina eliminada');
        
        //
    }
}
