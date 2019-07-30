<?php  

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class UserController extends Controller 
  {
   
     public function index(){
 
         if (request()->has('empty')){
             $users = [];


         } else {

            $users = [
                'Misa',
                'Benjamin',
                'Javier',
                
    
            ];
         }



         
        
        return view('users', [
            'users' => $users
        ]);
  
  
     }
    
     public function show ($id)
     {
         return "Mostrando detalle del ussuario: {$id}";
  
     } 

     public function create ()
     {
         return "Crear nuevo usuarios";
  
     } 

     
    }
?>