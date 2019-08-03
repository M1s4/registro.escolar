
   <!--Esta seccion se extiende con nombre de layout para poder utilizarla en layout.blade.php -->
      @extends('layout') 
    <!--exta secction se nombre contenido y se extiende con nombre de layout desde otro archivo -->
    <!-- Estas en la plantilla registrar.blade.php-->
        @section('contenido')
        <div class="content-form-login">
        <form class="form-signin" method="POST" action="{{route('login')}}">
        {!!csrf_field() !!}
          
          <h1 class="h3 mb-3 font-weight-normal">¡ingresa YA!</h1>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electronico"  autofocus="">
          {!! $errors->first('email', '<span class="help-block">:message </span>')}
          
          <label for="inputPassword"  class="sr-only">Password</label>
         
         <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" >
         {!! $errors->first('password', '<span class="help-block">:message </span>')}
          <div class="checkbox mb-3">
          
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          <p class="mt-2 mb-1 text-muted">El aprendizage se basa en inspirar tu mente, no en llenar tu cabeza</p>
        </form>
      </div>
      
    

    
    


@endsection