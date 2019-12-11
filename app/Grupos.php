<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    //
    protected $table = 'Cotizacion';
    protected $primarykey = 'idGrupo';

    protected $fillable = ['idGrupo','NombreGrupo','FechaInicio','FechaFin','NoHabitaciones','Estado','Cliente_id'.'Tipo'];
    public $timestamps = false;
}
