<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    //
    protected $table = 'Bitacora';
    protected $primarykey = 'idBitacora';

    protected $fillable = ['idCliente','Usuario','Host','Fecha','Accion','Tabla','Datos'];
    public $timestamps = false;
}
