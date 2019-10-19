<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'messageDB' => 'Cliente dado de Alta con exito!',
            'alert-type' => 'success'
        );

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
    public function update(Request $request,$id)
    {
        //
        return $request;
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
