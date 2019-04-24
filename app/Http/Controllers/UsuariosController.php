<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;


class UsuariosController extends Controller
{

    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:admin'
            
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
        $datos['users']= User::name($request->get('name'))->paginate(5);
        //dd($datos);
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

        $roles = Role::all();
        
        return view('usuarios.create', compact('roles'));
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

            'name' => 'required|string|max:100',
            'apellido' =>  'required|string|max:100',
            'cedula' => 'required|string|max:15',
            'email' =>  'required|string|max:50|unique:users,email',
            'telefono' => 'required|string|max:100',
            'password' =>  'required|string|max:100',
            'rango' => 'required|string|max:100',
            'rol' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);

///////////////////////////////////////////////////////////////////////////////////


        $datosUsuario=request()->except('_token');
        
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->cedula = $request->cedula;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->password = Hash::make($request->password);
        $usuario->rango = $request->rango;
        $usuario->rol = $request->rol;
        $usuario->save();

        //dd($usuario);
        //User::insert($datosUsuario);//almacenar datos en la base de datos

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
        $roles = Role::all();
        $users= User::findOrFail($id);
        //
        return view('usuarios.edit', compact('users', 'roles'));
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
        
        
        $campos=[

            'name' => 'required|string|max:100',
            'apellido' =>  'required|string|max:100',
            'cedula' => 'required|string|max:15',
            'email' =>  'required|string|max:50|',
            'telefono' => 'required|string|max:100',
            //'password' =>  'required|string|max:100',
            'rango' => 'required|string|max:100',
            'rol' =>  'required|string|max:100'

        ];

        $Mensaje=["required"=>':attribute es requerida'];

        $this->validate($request, $campos, $Mensaje);
//////////////////////////////////////////////////////////////////////////
            //dd($request);
            $usuario = User::find($id);
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->cedula = $request->cedula;
            $usuario->email = $request->email;
            $usuario->telefono = $request->telefono;
           // $usuario->password = Hash::make($request->password);
            $usuario->rango = $request->rango;
            $usuario->rol = $request->rol;
            $usuario->save();

//
        $datosUsuario=request()->except(['_token','_method']);
        //
        //Usuarios::where('id','=',$id)->update($datosUsuario);

        //consultar la informacion de razas
        //$users= User::findOrFail($id);
        $roles = Role::all();
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
        $users= User::findOrFail($id);
        User::destroy($id); // borrar algun elemento de la base de datos

        
        return redirect('usuarios')->with('Mensaje','Usuario eliminado');
    }
}
