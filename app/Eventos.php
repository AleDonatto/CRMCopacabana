<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
    protected $table = 'Eventos';
    //protected $primarykey = 'idGrupo';

    protected $fillable = [
        'FechaInicio',
        'HoraInicio',
        'HoraFin',
        'Grupo_id',
        'Salon_id'
    ];
    public $timestamps = false;
}
