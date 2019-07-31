<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   public function Materias(){
       return $this->belongsTo(Materias::class, 'id_materias');
   }
}
