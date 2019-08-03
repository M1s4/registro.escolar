<?php

namespace App\Http\Controllers;

use App\{Usuarios, Student};
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
     //llamamos a las tabla rol para vaciarla dentro del select
     //$data=request()->all();
     
  
        $data = request()->validate([

            'nombre' => 'required',
            'contrasena' => 'required',
            'correo' => 'required',
        
            
      ], [
          'nombre.required' => 'El campo nombre es obligatorio'
      ]);

           Usuarios::create([
                'nombre'=> $data['nombre'],
                'password'=> $data['contrasena'],
                'email'=> $data['correo'],
                
           ]);

          
           return redirect()->action('RegistroController@login');
          //argumento back devuelve a la pagina de atras                                  
          // return redirect()->back()->with(['message' => 'Se creo usuario correctamente']);




           
        
      

    }
      /*

        $errors =  $request->validate(
            [   
                'nombre' => 'required',
                'contrasena' => 'required',
                'correo' => 'required', 
          ], [
              'nombre.required' => 'El campo nombre es obligatorio'
          ]
        );

        if($errors){
            return redirect()->back()->with(['errors' => $errors]);
        }
      
        $student =  new Usuario;
        $student->fill($data->all());
        $users->save();

        return redirect()->route('user/registrar')->with(['message' => 'Creado correctamente']);

      /*
      $data = request()->validate([

            'nombre' => 'required',
            'contrasena' => 'required',
            'correo' => 'required', 
      ], [
          'nombre.required' => 'El campo nombre es obligatorio'
      ]);
        
      */

     
     

/*Aqui coienzan los controladores hacia las vistas del proyecto ya mas aterrizado */
    public function login()
    {

          return view('login');   
    }


    public function validate_data($request){
        /*
            codigo de validaciones
        */

        //si tiene error regresar al formulario anterior

        // return $request
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
          
        return view('users', compact('usuarios'));


    }
       

    public function edit(){
         
    }

    
    public function listar(){
         
        return view ('listar');

    }







}
