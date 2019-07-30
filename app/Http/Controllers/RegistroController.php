<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    
   public function index()
    {
        return view('registrar');
    }
  
    /* 
    public function materias()
    {
        return view('materias');
    }*/
    /*
    public function listado(){
         

    }
    public function crear()
    {
        return view ('alumnos');        
    }

    public function store()
    {
         /* User::crear([
              'nombre'=> 'Misael',
              'edad'=> '14',
              'pass'=> bcrypt(12345)
            
          ]);
         return 'Procesando informacion';

    }
     
*/
/*Aqui coienzan los controladores hacia las vistas del proyecto ya mas aterrizado */
    public function login()
    {

          return view('login');   
    }


    public function registrar(){
        return view('registro');
    }

    public function admin(){
        $materias=DB::table('materias')->get();
        $usuarios=DB::table('usuarios')->get();
        
          return view('admin', compact('materias', 'usuarios'));
        }
        
    public function users(){
        $usuarios=DB::table('usuarios')->get();
          
        return view('users', compact('usuarios')
       );


    }


    
    public function listar(){
         
        return view ('listar');

    }







}
