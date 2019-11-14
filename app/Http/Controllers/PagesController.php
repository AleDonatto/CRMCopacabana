<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //Controlador de paginas 
    public function Inicio(){
        return view('welcome');
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
                'nick'=>'required|string',
                'password'=>'required|string',
                //$this->username() => 'required|string',
                //$this->getAuthPassword() => 'required|string'
            ]
        );
    
        if (Auth::attempt(['Nick'=>$datos['nick'],'password'=>$datos['password']])) {
            // Authentication passed...
            $result = DB::select('select * from Users WHERE Nick = :Nombre',['Nombre'=>$datos['nick']]);
            foreach($result as $post ){
                $id = $post->idUsuarios;
                $nombre = $post->Nombre;
                $apellidos = $post->Apellidos;
                $nick = $post->Nick;
                $pGrupos = $post->pGrupos;
                $pRecepcion = $post->pRecepcion;
                $pDist = $post->pClientDis;
                $pAdmin = $post->pAdmin;
            }
            session(['idUser'=>$id]);
            session(['Nombre'=>$nombre]);
            session(['Apellidos'=>$apellidos]);
            session(['Nick'=>$nick]);
            session(['pGrupos'=>$pGrupos]);
            session(['pRecepcion'=>$pRecepcion]);
            session(['pDist'=>$pDist]);
            session(['pAdmin'=>$pAdmin]);
            return view('contenido');
            //return redirect()->intended('contenido');
        }else{
            return back()
                ->withErrors(['nick'=>trans('auth.failed')])
                ->withInput(request(['nick']));
        }

        /*$result = DB::select('select * from Usuarios WHERE Nombre = :Nombre',['Nombre'=>$datos['Nombre']]);
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
        }*/
    }

    public function Iniciar(){
        return view('inicio');
    }


    public function Index(){
        return view('index');
    }

    public function Logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        //session::flush();
        //session_destroy();
        return view('welcome');
    }
    
    public function encuesta(){
        return view('encuesta');
    }

    public function username(){
        return 'Nick';
    }

    public function getAuthPassword(){
		return 'password';
    }

}
