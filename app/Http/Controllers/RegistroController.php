<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Registro;
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
*/
    public function store(Request $request)
    {
      
      $name = $request -> input ('nombre');
      $pass = $request -> input ('password');
      $email = $request -> input ('correo');
      DB::table('usuarios')->insert([
           'nombre' =>$name,
           'password' =>$pass,
           'email' =>$email,    
      ]);
      
      
      
      
      
        /*
        $data = request()->all();

          User::create([
              'nombre'=> $data['nombre'],
              'password'=> bcrypt($data['password']),
              'email' =>$data['correo'],            
          ]);*/
         return 'Se registro coreectamente el usuario';

    }
     

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
