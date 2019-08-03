<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
 protected $fillable=['id_userR', 'id_rolR'];
 
 
    public function Usuarios(){
        return $this->hasmany('App\Usuarios');
    }

}

