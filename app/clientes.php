<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    protected $table = 'clientes';
    protected $primarykey = 'idCliente';

    protected $fillable = [
        'idCliente',
        'Nombre',
        'ApePaterno',
        'ApeMaterno',
        'Profesion',
        'FechaNac',
        'Telefono',
        'Celular',
        'Correo',
        'Domicilio',
        'CP',
        'Ciudad',
        'Estado',
        'Pais',
        'TipoCliente'
    ];
    public $timestamps = false;
}
