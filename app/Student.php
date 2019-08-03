<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['id_student', 'id_materia', 'iduser'];
    
      public function Usuarios(){
        return $this->hasmany('App\Usuarios');
    }
}
