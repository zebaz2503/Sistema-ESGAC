<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $datos['usuarios']= Usuarios::name($request->get('name'))->paginate(5);
        return view('usuarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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

            'nombres' => 'required|string|max:100',
            'apellidos' =>  'required|string|max:100',
            'cedula' => 'required|string|max:15',
            'correo' =>  'required|string|max:50',
            'telefono' => 'required|string|max:100',
            'contraseña' =>  'required|string|max:100',
            'rango' => 'required|string|max:100',
            'rol' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);

///////////////////////////////////////////////////////////////////////////////////




        $datosUsuario=request()->except('_token');
        
        Usuarios::insert($datosUsuario);//almacenar datos en la base de datos


        //return response()->json($datosRaza);
        return redirect('usuarios')->with('Mensaje','Usuario agragado con éxito!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios= Usuarios::findOrFail($id);
        //
        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[

            'nombres' => 'required|string|max:100',
            'apellidos' =>  'required|string|max:100',
            'cedula' => 'required|string|max:15',
            'correo' =>  'required|string|max:50',
            'telefono' => 'required|string|max:100',
            'contraseña' =>  'required|string|max:100',
            'rango' => 'required|string|max:100',
            'rol' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);
//////////////////////////////////////////////////////////////////////////
        //
        $datosUsuario=request()->except(['_token','_method']);
        //
        Usuarios::where('id','=',$id)->update($datosUsuario);

        //consultar la informacion de razas
       // $razas= Razas::findOrFail($id);
        //return view('razas.edit', compact('razas'));
       
        return redirect('usuarios')->with('Mensaje','Usuario modificado con éxito!!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuarios= Usuarios::findOrFail($id);
        
        Usuarios::destroy($id); // borrar algun elemento de la base de datos

        
        return redirect('usuarios')->with('Mensaje','Usuario eliminado');
    }
}
