<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuarios;
use App\Grupos;
use App\Bitacora;
use PDF;

class SpecialCOntroller extends Controller
{
    //
    public function __construct(){
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
            $cotizacion->Tipo = $request->tipoCot;
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
            $bitacora->Tabla = 'Cotizacion';
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

    public function ChangePassword(Request $request){

        $validator = $this->Validate(
            request(),[
                'password'=>'required|string',
                'password_confirmation'=>'required|string'
            ]
        ); 
        
        if($request->password != $request->password_confirmation){
            $nomatch = array(
                'dospassword'=>'Las Credenciales no Coinciden'
            );
            return back()->with($nomatch);
        }

        $usuarios = DB::table('Users')
        ->where('idUsuarios',$request->user)
        ->update([
            'password'=> bcrypt($request->password) 
        ]);


        $notificationUser = array(
            'messageHeader' => 'Usuarios',
            'messageDB' => 'Cambio de Passowrd exitoso!',
            'alert-type' => 'success'
        );

        $host = request()->getHttpHost();
        $hora = date('l jS \of F Y h:i:s A');
        $datos = $request->user;

        $bitacora = new Bitacora;
        $bitacora->Usuario = session('idUser');
        $bitacora->Host = $host;
        $bitacora->Fecha = $hora;
        $bitacora->Accion = 'Cambio de contraseña Usuario';
        $bitacora->Tabla = 'Users';
        $bitacora->Datos = $datos;
        $bitacora->save();

        return back()->with($notificationUser);
    }

    public function CotizacionGrupos($id){

        $cotizacion = DB::table('clientes')
        ->join('cotizacion','clientes.idCliente','=','Cotizacion.Cliente_id')
        ->select('clientes.Nombre','clientes.ApePaterno','clientes.ApeMaterno','clientes.Profesion'
        ,'cotizacion.NombreGrupo','cotizacion.FechaInicio','cotizacion.FechaFin','cotizacion.NoHabitaciones')
        ->where('idCliente',$id)->get();

        foreach($cotizacion as $item){
            $nombre = $item->Nombre;
            $aPaterno = $item->ApePaterno;
            $aMaterno = $item->ApeMaterno;
            $profesion = $item->Profesion;
            $grupo = $item->NombreGrupo;
            $fechaInicio = $item->FechaInicio;
            $fechafin = $item->FechaFin;
            $cantidad = $item->NoHabitaciones;
        }

        $data = [
            'grupo' => $grupo,
            'persona' => $nombre,
            'cantidad' => $cantidad,
            'fechafin' => $fechafin
        ];

        //$pdf= PDF::loadView('formatos.cotGrupos');
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->download('cotizacion.pdf');

        //$pdf = PDF::loadView('formatos.cotGrupos')
        //->stream('cotizacion.pdf');
        //return $pdf->download('cotizacion.pdf');

        $pdf = PDF::loadView('formatos.cotGrupos',$data);
        //->stream('cotizacion.pdf');
        //return $pdf->download('cotizacion.pdf');
        return $pdf->stream('cotizacion.pdf');
        //return view('formatos.cotGrupos');*/
        
    }

    public function CotizacionIndividual(){
        return view('formatos.cotIndividual');
    }

    public function Dashboard(){
        return view('dashboard');
    }
}
