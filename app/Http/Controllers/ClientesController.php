<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\clientes;
use App\Bitacora;

class ClientesController extends Controller
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
        /*$host = request()->getHttpHost();
        return $host;*/
        
        $clients = DB::table('clientes')->get();
        //$clientes = clientes::all();
        return view('list.listClientes',['clientes'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $host = request()->getHttpHost();
        //return session('Nombre');
        return view('form.formClientes');
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
        $validation = $request->validate([
            'inputNombre'=>'required|string',
            'inputAP'=>'required|string',
            'inputAM'=>'required|string',
            'inputProfesion'=>'required|string',
            'inputFN'=>'required|date',
            'inputTelefono'=>'required|string',
            'inputCelular'=>'required|string',
            'inputEmail'=>'required|email',
            'inputDomicilio'=>'required|string',
            'inputCP'=>'required|string',
            'inputCiudad'=>'required|string',
            'inputEstado'=>'required|string',
            'inputPais'=>'required|string',
            'inputTC'=>'required|string'
        ]);

        $clientes = new clientes;
        $clientes->Nombre = $request->inputNombre;
        $clientes->ApePaterno = $request->inputAP;
        $clientes->ApeMaterno = $request->inputAM;
        $clientes->Profesion = $request->inputProfesion;
        $clientes->FechaNac = $request->inputFN;
        $clientes->Telefono = $request->inputTelefono;
        $clientes->Celular = $request->inputCelular;
        $clientes->Correo = $request->inputEmail;
        $clientes->Domicilio = $request->inputDomicilio;
        $clientes->CP = $request->inputCP;
        $clientes->Ciudad = $request->inputCiudad;
        $clientes->Estado = $request->inputEstado;
        $clientes->Pais = $request->inputPais;
        $clientes->TipoCliente = $request->inputTC;
        $clientes->save();

        $notificationUser = array(
            'messageHeader' => 'Clientes',
            'messageDB' => 'Cliente dado de Alta con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->inputNombre.","
        .$request->inputAP.","
        .$request->inputAM.","
        .$request->inputProfesion.","
        .$request->inputFN.","
        .$request->inputTelefono.","
        .$request->inputCelular;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Nuevo Cliente';
        $bitacora->Tabla = 'Clientes';
        $bitacora->Datos = $datos;
        $bitacora->save();

        return back()->with($notificationUser);
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
        $validator = Validator::make($request->all(), [
            'nombre'=>'required|string',
            'Apaterno'=>'required|string',
            'Amaterno'=>'required|string',
            'profesion'=>'required|string',
            'fn'=>'required|date',
            'telefono'=>'required|string',
            'celular'=>'required|string',
            'correo'=>'required|email',
            'direccion'=>'required|string',
            'cp'=>'required|string',
            'ciudad'=>'required|string',
            'estado'=>'required|string',
            'pais'=>'required|string',
            'tcliente'=>'required|string',
        ]);

        if ($validator->fails()) {
            
            $notificationUser = array(
                'messageHeader' => 'Clientes',
                'messageDB' => 'Ocurrio un problema al actualizar el dato, asegurese de llenar los campos',
                'alert-type' => 'warning'
            );

            return back()->with($notificationUser);
        }

        //
        $clientes=DB::table('Clientes')
        ->where('idCliente',$request->id)
        ->update([
            'Nombre'=>$request->nombre,
            'ApePaterno'=>$request->Apaterno,
            'ApeMaterno'=>$request->Amaterno,
            'Profesion'=>$request->profesion,
            'FechaNac'=>$request->fn,
            'Telefono'=>$request->telefono,
            'Celular'=>$request->celular,
            'Correo'=>$request->correo,
            'Domicilio'=>$request->direccion,
            'CP'=>$request->cp,
            'Ciudad'=>$request->ciudad,
            'Estado'=>$request->estado,
            'Pais'=>$request->pais,
            'TipoCliente'=>$request->tcliente]);

        $notificationUser = array(
            'messageDB' => 'Datos del Cliente actualizados con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->nombre.","
        .$request->Apaterno.","
        .$request->Amaterno.","
        .$request->porfesion.","
        .$request->fn.","
        .$request->telefono.","
        .$request->celular;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Modificacion Cliente';
        $bitacora->Tabla = 'Clientes';
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
    public function destroy($id)
    {
        //
    }
}
