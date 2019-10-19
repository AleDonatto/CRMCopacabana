<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuarios extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    protected $table = 'Usuarios';
    protected $primaryKey  = 'idUser';

    protected $fillable = ['idUser','Nombre','Apellidos','Nick','password','idPermiso'];
    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
		'Nombre' => 'required',
		'password' => 'required'
    ];

    public function getAuthIdentifier(){
      return $this->getKey();
    }
    
    public function getAuthPassword(){
      return $this->password;
    }

}
