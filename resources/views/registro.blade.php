
   <!--Esta seccion se extiende con nombre de layout para poder utilizarla en layout.blade.php -->
      @extends('layout') 
    <!--exta secction se nombre contenido y se extiende con nombre de layout desde otro archivo -->
    <!-- Estas en la plantilla registrar.blade.php-->
        @section('contenido')
      <div class="content-form">
        <h2>¡Te estamos esperando!</h2>
        <form method="POST" action="{{url('usuarios/crear')}}">
          {!!csrf_field() !!}
            <div class="form-group">
       
              <input type="text" class="form-control" id="inputAddress" placeholder="Nombre completo" name="nombre" required>
            </div>
            
            <div class="form-row">
              
               <div class="form-group col-md-6">    
                 <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="contrasena" required>
                </div>

                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputCity" placeholder="correo" name="correo" required>
                </div>
             
            </div>            
           
            <div class="form-row">
              <div class="form-group col-md-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                   <label class="form-check-label" for="gridCheck" style="color:White;">
                     Aceptar terminos y condiciones
                   </label>
                </div>
              </div>
              
            </div>
           <div class="content-btn">
              <button type="submit" class="btn div-boton">Registrar</button>
           </div>
            
          </form>
      </div>
    

    
    


@endsection