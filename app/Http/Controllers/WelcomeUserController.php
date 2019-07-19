

<?php 
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
   
  class WelcomeUserController extends Controller{

    public function index()
    {
        $name = ucfirst($name);

        if($nickname){
            return "Bienvenido {$name}, tu aposo es {$nickname}";
        } else {
            return "Bienvenido {$name}";
        }
    }
  }

?>