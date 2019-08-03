<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriasCiclo extends Model
{
    protected $fillable=['id_rol','nombre_rol'];
 
              
    public function Usuarios(){
        return $this->hasmany('App\Usuarios');
    }
}
