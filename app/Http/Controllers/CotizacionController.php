<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use App\Grupos;
use App\clientes;
use App\Bitacora;

class CotizacionController extends Controller
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
        $cotizacion = DB::table('clientes')
        ->join('cotizacion','clientes.idCliente','=','Cotizacion.Cliente_id')
        ->select('clientes.Nombre','clientes.ApePaterno','clientes.ApeMaterno','clientes.Telefono','clientes.Celular','clientes.Correo','cotizacion.*')
        ->get();

        //$cotizacion = DB::table('Cotizacion')->get();
        return view('list.listCotizacion',['clientes' => $cotizacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form.formCotizacion');
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
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCliente)
    {
        //
        //$cliente = clientes::find($idCliente);
        $cliente = DB::table('clientes')
        ->select('idCliente','Nombre','ApePaterno','ApeMaterno','Telefono','Correo')
        ->where('idCliente',$idCliente)
        ->first();
        //return $cliente;
        return view('form.formCotizacion',['clientes'=>$cliente]);

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
        $validation = Validator::make($request->all(),[
            'nombregrupo'=>'required|string',
            'fechainicio'=>'date|required',
            'fechafin'=>'date|required',
            'habitaciones'=>'required|string',
        ]);

        if($validation->fails()){
            $notificationUser = array(
                'messageHeader' => 'Cotizaciones',
                'messageDB' => 'Ocurrio un problema al actualizar el dato, asegurese de llenar los campos',
                'alert-type' => 'warning'
            );

            return back()->with($notificationUser);
        }

        $cotizacion = DB::table('Cotizacion')
        ->where('idGrupo',$request->idgrupo)
        ->update([
            'NombreGrupo'=>$request->nombregrupo,
            'FechaInicio'=>$request->fechainicio,
            'FechaFin'=>$request->fechafin,
            'NoHabitaciones'=>$request->habitaciones
        ]);

        $notificationUser = array(
            'messageHeader' => 'Cotizaciones',
            'messageDB' => 'Datos de la Cotizacion actualizados con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->nombregrupo.","
        .$request->fechainicio.","
        .$request->fechafin.","
        .$request->habitaciones;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Modificacion Cotizacion';
        $bitacora->Tabla = 'Cotizacion';
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
