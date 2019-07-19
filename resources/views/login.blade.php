
   <!--Esta seccion se extiende con nombre de layout para poder utilizarla en layout.blade.php -->
      @extends('layout') 
    <!--exta secction se nombre contenido y se extiende con nombre de layout desde otro archivo -->
    <!-- Estas en la plantilla registrar.blade.php-->
        @section('contenido')
        <div class="content-form-login">
        <form class="form-signin">
          
          <h1 class="h3 mb-3 font-weight-normal">¡ingresa YA!</h1>
          <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
          <div class="checkbox mb-3">
          
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          <p class="mt-2 mb-1 text-muted">El aprendizage se basa en inspirar tu mente, no en llenar tu cabeza</p>
        </form>
      </div>
      
    

    
    


@endsection