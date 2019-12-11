<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Usuarios;
use App\Bitacora;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserCheck');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = DB::table('Users')->get();
        return view('list.listUser',['Users'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form.formUser');
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
        $validacion = $this->Validate(
            request(),
            [
                'nombreuser'=>'required|string',
                'apellidos'=>'required|string',
                'nick'=>'required|string',
                'clave'=>'required|string'
            ]
        );

       try{
            $usuarios = new Usuarios;
            $usuarios->Nombre = $request->nombreuser;
            $usuarios->Apellidos = $request->apellidos;
            $usuarios->Nick = $request->nick;
            $usuarios->password = bcrypt($request->clave);
            $usuarios->pGrupos = $request->pVentas;
            $usuarios->pRecepcion = $request->pRecepcion;
            $usuarios->pClientDis = $request->pClientesDis;
            $usuarios->pAdmin = $request->pAdmin;
            $usuarios->save();

            $notificationUser = array(
                'messageHeader' => 'Usuarios',
                'messageDB' => 'Usuario creado con exito!',
                'alert-type' => 'success'
            );

            $host = request()->getHttpHost();
            $hora = date('l jS \of F Y h:i:s A');
            $datos = $request->nombreuser.",".$request->apellidos.",".$request->nick;

            $bitacora = new Bitacora;
            $bitacora->Usuario = session('idUser');
            $bitacora->Host = $host;
            $bitacora->Fecha = $hora;
            $bitacora->Accion = 'Nuevo Usuario';
            $bitacora->Tabla = 'Users';
            $bitacora->Datos = $datos;
            $bitacora->save();

            return back()->with($notificationUser);

        }catch(QueryException $ex ){
            $notificationUser = array(
                //'messageDB' => $ex->getMessage(),
                'messageHeader' => 'Usuarios',
                'messageDB' => 'Ocurrio un problema, posiblemente el campo NICK se este duplicando',
                'alert-type' => 'warning'
            );
    
            return back()->with($notificationUser);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('form.resetPassword',['idusuario'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre'=>'required|string',
            'apellidos'=>'required|string',
            'nick'=>'required|string',
        ]);

        if ($validator->fails()) {
            
            $notificationUser = array(
                'messageHeader' => 'Usuarios',
                'messageDB' => 'Ocurrio un problema al actualizar el dato, asegurese de llenar los campos',
                'alert-type' => 'warning'
            );

            return back()->with($notificationUser);
        }

        //
        $id = $request->id;
        $clientes=DB::table('Users')
        ->where('idUsuarios',$request->id)
        ->update([
            'Nombre'=>$request->nombre,
            'Apellidos'=>$request->apellidos,
            'Nick'=>$request->nick,]);

        $notificationUser = array(
            'messageHeader' => 'Usuarios',
            'messageDB' => 'Datos del Usuario actualizados correctamente!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->nombre.",".$request->apellidos.",".$request->nick;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Modificacion Usuario';
        $bitacora->Tabla = 'Users';
        $bitacora->Datos = $datos;
        $bitacora->save();


        return back()->with($notificationUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $id)
    {
        //
        DB::table('Users')->where('idUsuarios', $id->id)->delete();

        $notificationUser = array(
            'messageHeader' => 'Usuarios',
            'messageDB' => 'Se a Eliminado el Usuarios Completamente!',
            'alert-type' => 'info'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->nombre.",".$request->apellidos.",".$request->nick;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Eliminacion de Usuario';
        $bitacora->Tabla = 'Users';
        $bitacora->Datos = $datos;
        $bitacora->save();

        return back()->with($notificationUser);
    }
}