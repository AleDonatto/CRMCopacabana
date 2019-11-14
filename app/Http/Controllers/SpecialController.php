<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuarios;
use App\Grupos;
use App\Bitacora;

class SpecialCOntroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('UserCheck');
    }

    public function ClientesSmall(){
        $clientes = DB::table('clientes')->select('idCliente','Nombre','ApePaterno','ApeMaterno','Correo','Telefono','Celular','TipoCliente')->get();

        return view('list.listClientsSmall',['clientes'=>$clientes]);
    }

    public function Bitacora(){
        $bitacora = DB::table('bitacora')->get();

        return view('list.listBitacora',['bitacora'=>$bitacora]);
    }

    public function CotizacionInsert(Request $request){
        $validacion = $this->Validate(
            request(),
            [
                'grupo'=>'required|string',
                'fechaInicio'=>'required|string',
                'fechaFin'=>'required|string',
                'nHabitaciones'=>'required|string'
            ]
        );

        try{
            $cotizacion = new Grupos;
            $cotizacion->NombreGrupo = $request->grupo;
            $cotizacion->FechaInicio = $request->fechaInicio;
            $cotizacion->FechaFin = $request->fechaFin;
            $cotizacion->NoHabitaciones = $request->nHabitaciones;
            $cotizacion->Estado = 'Pendiente';
            $cotizacion->Cliente_id = $request->idCliente;
            $cotizacion->save();

            $notificationUser = array(
                'messageDB' => 'Cotizacion Creada con exito!',
                'alert-type' => 'success'
            );

            $host = request()->getHttpHost();
            $hora = date('l jS \of F Y h:i:s A');
            $datos = $request->grupo.",".$request->fechaInicio.",".$request->fechaFin.",".$request->nHabitaciones;
    
            $bitacora = new Bitacora;
            $bitacora->Usuario = session('idUser');
            $bitacora->Host = $host;
            $bitacora->Fecha = $hora;
            $bitacora->Accion = 'Nueva Cotizacion';
            $bitacora->Tabla = 'Cotizaciones';
            $bitacora->Datos = $datos;
            $bitacora->save();

            return back()->with($notificationUser);
            
        }catch(QueryException $ex){
            $notificationUser = array(
                'messageDB' => 'Ocurrio un problema, '.$ex->getMessage(),
                'alert-type' => 'error'
            );
    
            return back()->with($notificationUser);
        }
    }

    public function CancelCotizacion($id){
        $cotizacion = DB::table('Cotizacion')
        ->where('idGrupo',$id)
        ->update([
            'Estado'=> 'Cancelada'
        ]);

        $notificationUser = array(
            'messageDB' => 'Cotizacion Cancelada con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Cancelacion Cotizacion';
        $bitacora->Tabla = 'Cotizacion';
        $bitacora->Datos = '';
        $bitacora->save();

        return back()->with($notificationUser);
    }

    public function ConfirmCotizacion($id){
        
        $cotizacion = DB::table('Cotizacion')
        ->where('idGrupo',$id)
        ->update([
            'Estado'=> 'Confirmado'
        ]);

        $notificationUser = array(
            'messageDB' => 'Cotizacion Confirmada con exito!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Cancelacion Cotizacion';
        $bitacora->Tabla = 'Cotizacion';
        $bitacora->Datos = '';
        $bitacora->save();

        return back()->with($notificationUser);
    }
}
