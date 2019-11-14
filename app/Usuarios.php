<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuarios extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    protected $table = 'Users';
    protected $primaryKey  = 'idUsuarios';

    protected $fillable = ['idUsuarios','Nombre','Apellidos','Nick','password','pGrupos','pRecepcion','pClientDis','pAdmin'];
    //public $timestamps = false;

    protected $dateFormat = 'M j Y h:i:s';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
		'Nick' => 'required',
		'password' => 'required'
    ];

    public function getAuthIdentifier(){
      return $this->getKey();
    }
    
    public function getAuthPassword(){
      return $this->password;
    }

    public function username(){
      return $this->Nombre;
    }

}
