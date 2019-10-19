<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class PagesController extends Controller
{
    
    //Controlador de paginas 
    public function Inicio(){
        return view('welcome');
    }

    // metodo de registro ejemplo
    public function InsertUser(Request $request){
        $validacion = $this->Validate(
            request(),
            [
                'nombreuser'=>'required|string',
                'apellidos'=>'required|string',
                'nick'=>'required|string',
                'clave'=>'required|string',
                'permiso'=>'required|integer'
            ]
        );

        $usuarios = new Usuarios;
        $usuarios->Nombre = $request->nombreuser;
        $usuarios->Apellidos = $request->apellidos;
        $usuarios->Nick = $request->nick;
        $usuarios->password = bcrypt($request->clave);
        $usuarios->idPermiso = $request->permiso;
        $usuarios->save();

        $notificationUser = array(
            'messageDB' => 'Usuario creado con exito!',
            'alert-type' => 'success'
        );

        return back()->with($notificationUser);
    }

    public function formUser(){
        return view('form.formUser');
    }

    public function listUsers(){
        $usuarios = DB::table('Usuarios')->get();
        return view('list.listUser',['Usuarios'=>$usuarios]);
    }

    public function formClients(){
        return view('form.formClientes');
    }

    public function ConsUser(){
        $usuarios = Usuarios::all();

        return back()->with(compact('usuarios'));
    }

    public function LoginPost(Request $request){
        $validator = Validator::make($request->all(),[
            'Nombre' => 'required|string',
            'password' => 'required|string',
        ]);

        if ( $validator->fails() ) {
            return response()->json( [ 'success' => false, 'errors' => $validator->errors() ] );
        }

        if(Auth::attempt(['Nombre'=>$request->Nombre, 'password'=>$request->password])){
            return view('contenido');
        }else{
            return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withErrors(request(['Nombre']));
        }
    }

    //metodo de login ejemplo 
    public function LoginUser(Request $request){
        $datos = $this->Validate(
            request(),
            [
                'Nombre'=>'required|string',
                'password'=>'required|string'
            ]
        );
        $result = DB::select('select * from Usuarios WHERE Nombre = :Nombre',['Nombre'=>$datos['Nombre']]);
        $nombreok;
        $passwordok;
        $nombre = $datos['Nombre'];
        $password= $datos['password'];

        foreach($result as $post ){
            $id = $post->idUser;
            $nombreok = $post->Nombre;
            $apellidos = $post->Apellidos;
            $nick = $post->Nick;
            $permiso = $post->idPermiso;
            $passwordok = $post->password;
        }

        if(isset($nombreok)){  
            if($nombre == $nombreok){
                //return 'Nombres Correctos';
                if($password == $passwordok){
                    session(['idUser'=>$id]);
                    session(['Nombre'=>$nombre]);
                    session(['Apellidos'=>$apellidos]);
                    session(['Nick'=>$nick]);
                    session(['Permiso'=>$permiso]);
                    return view('contenido');
                }else{
                    return back()
                        ->withErrors(['password'=>trans('auth.failed')])
                        ->withInput(request(['password']));
                }
            }else{
                return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withInput(request(['Nombre'])); 
            }         
        }else{
            return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withInput(request(['Nombre']));
        }
    }

    public function Iniciar(){
        return view('inicio');
    }

    public function Permisos(){
        $roles = DB::table('Permisos')->get();
        return view('list.listPermisos',['Permisos'=>$roles]);
    }

    public function Index(){
        return view('index');
    }

    public function Logout(Request $request){
        //Auth::logout();
        $request->session()->flush();
        //Session::flush();
        //session_destroy();
        return view('welcome');
    }

    public function username()
    {
        return 'Nombre';
    }

    public function getAuthPassword()
	{
		return 'password';
    }
    
    public function encuesta(){
        return view('encuesta');
    }

}
