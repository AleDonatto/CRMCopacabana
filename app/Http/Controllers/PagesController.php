<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use App\Usuarios;
use Auth;

class PagesController extends Controller
{
    //Controlador de paginas 
    public function Inicio(){
        return view('welcome');
    }

    // metodo de registro ejemplo
    public function IngresarDatosUser(Resquest $request){
        $validation = Validator::make($request->all(),[
            'Nombre'=>'required|string',
            'Apellidos'=>'required|string|max:10',
            'Nick'=>'required|string',
            'Contrasena'=>'required|string',
            'PerVentas'=>'required|string',
            'PerRecepcion'=>'required|string',
            'PerAdmin'=>'required|string'
        ]);

        if($validation->fails()){
            return redirect('/inicio')
            ->withInput()
            ->withError($validation);
        }

        $usuarios = new Usuarios();
        $usuarios -> user = $request-> user;
        $usuarios -> password = bcrypt($request-> Contrasena);

        $usuarios -> save();

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
            return view('index');
        }else{
            return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withErrors(request(['Nombre']));
        }
    }

    //metodo de login ejemplo 
    public function LoginUser(){
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

        if($nombreok == $nombre){
            //return 'Nombres Correctos';
            if($passwordok == $password){
                //session_start();
                session(['idUser'=>$id]);
                session(['Nombre'=>$nombre]);
                session(['Apellidos'=>$apellidos]);
                session(['Nick'=>$nick]);
                session(['Permiso'=>$permiso]);
                /*$_SESSION['idUser']=$id;
                $_SESSION['Nombre']=$nombre;
                $_SESSION['Apellidos']=$apellidos;
                $_SESSION['Nick']=$nick;
                $_SESSION['Permiso']=$permiso;*/
                return view('index');
            }else{
                return back()
                    ->withErrors(['password'=>trans('auth.failed')])
                    ->withInput(request(['password']));
            }
        }
        else{
            return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withInput(request(['Nombre']));
        }

        /*if(Auth::attempt($datos)){
            return $datos;
        }else{
            return back()
                ->withErrors(['Nombre'=>trans('auth.failed')])
                ->withInput(request(['Nombre']));
        }*/
    }

    public function Iniciar(){
        //$usuarios = App\Usuarios::all();
        //return view('inicio',compact('usuarios'));
        return view('inicio');
    }

    public function VerDatos(){
        
        $this ->validate(request(),[
            'Nombre'=>'required|string',
            'Contrasena'=>'required|string'
        ]);

        if($user == $NombreUser){
            return view('conn');
        }else{
            return view('welcome');
        }
        
        //$user = DB::select('select * from Usuarios');
        //$usuarios = Usuarios::all();
        //return view('conn',compact('usuarios'));


        //return "Funciono el pinche metodo post juesu puta madre";
        return view('conn');
        //return view('user.conn',['Usuarios'=>$user]);
    }

    public function Index(){
        return view('index');
    }

    public function GuardarDatos(Request $request){
        $usuarios = Usuarios();
        $usuarios -> idUser = $request -> idUser;
        $usuarios -> NameUser = $request -> NameUser;
        $usuarios -> Correo = $request -> Correo;
        $usuarios -> Password = $request -> Password;
        $usuarios -> Tipo = $request -> Tipo;

        $usuarios - save();
    }

    public function Logout(){
        //session::flush();
        Auth::logout();
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
}
