<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Bitacora;
use App\Eventos;

class EventosController extends Controller
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
        $eventos = DB::table('eventos')
        ->join('cotizacion','cotizacion.idGrupo','=','Eventos.grupo_id')
        ->join('salones','salones.idSalon','=','Eventos.salon_id')
        ->select('cotizacion.NombreGrupo','eventos.Fecha','eventos.HoraInicio','eventos.HoraFin','eventos.Grupo_id','salones.NombreSalon')
        ->get();

        return view('list.listEventos',['eventos'=>$eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'idcotizacion'=>'required|string',
            'fInicio'=>'required|date',
            'hora'=>'required|string',
            'horafin'=>'required|string',
            'Ssalon'=>'required|string',
        ]);

        if ($validator->fails()) {
            
            $notificationEventos = array(
                'messageHeader' => 'Eventos',
                'messageDB' => 'Ocurrio un problema al agregar salon, asegurese de llenar los campos',
                'alert-type' => 'warning'
            );
            return back()->with($notificationEventos);
        }

        $eventos = new Eventos;
        $eventos->FechaInicio = $request->fInicio;
        $eventos->HoraInicio = $request->hora;
        $eventos->HoraFin = $request->horafin;
        $eventos->Grupo_id = $request->idcotizacion;
        $eventos->Salon_id = $request->Ssalon;
        $eventos->save();

        $notification = array(
            'messageHeader' => 'Eventos',
            'messageDB' => 'Se agrego reservacion del salon con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->fInicio.","
        .$request->hora.","
        .$request->horafin.","
        .$request->idcotizacion.","
        .$request->Ssalon;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Salon reservado para cotizacion';
        $bitacora->Tabla = 'Eventos';
        $bitacora->Datos = $datos;
        $bitacora->save();

        return back()->with($notification);
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
        //
        $validator = Validator::make($request->all(), [
            'idcotizacion'=>'required|string',
            'fInicio'=>'required|date',
            'hora'=>'required|string',
            'horafin'=>'required|string',
            'Ssalon'=>'required|string',
        ]);

        if ($validator->fails()) {
            
            $notificationEventos = array(
                'messageHeader' => 'Eventos',
                'messageDB' => 'Ocurrio un problema al modificar evento, asegurese de llenar los campos',
                'alert-type' => 'warning'
            );
            return back()->with($notificationEventos);
        }

        $cotizacion = DB::table('Eventos')
        ->where('Grupo_id',$request->idcotizacion)
        ->update([
            'FechaInicio'=>$request->fInicio,
            'HoraInicio'=>$request->hora,
            'HoraFin'=>$request->horafin,
            'Salon_id'=>$request->Ssalon
        ]);

        $notificationUser = array(
            'messageHeader' => 'Eventos',
            'messageDB' => 'Datos de la Eventos actualizados con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->idcotizacion.","
        .$request->fInicio.","
        .$request->hora.","
        .$request->horafin.','
        .$request->Ssalones;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Modificacion reservacion de Eventos';
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
