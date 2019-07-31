
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
       
              <input type="text" class="form-control" id="inputAddress" placeholder="Nombre completo" name="nombre">
            </div><div class="form-row">
              <div class="form-group col-md-6">
                
                <input type="text" class="form-control" id="inputEmail4" placeholder="usuario" name="usuario">
              </div>
              <div class="form-group col-md-6">
              
                <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password">
              </div>
            </div>
            
           
            <div class="form-row">
              <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputCity" placeholder="Correo electronico" name="correo">
              </div>
              <div class="form-group col-md-4">
                    <select id="inputState" class="form-control" name="rol">
                  <option selected="" disabled="">Rubro</option>
                  <option>Estudiante</option>
                  <option>Maestro</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input type="number" min="10" class="form-control" id="inputZip" placeholder="edad">
              </div>
            </div><div class="form-row">
             <div class="form-group col-md-6">
                    <select id="inputState" class="form-control">
                  <option selected="" disabled="">Ciclo escolar</option>
                  <option>2019A</option>
                  <option>2019B</option>
                </select>
              </div>


              <div class="form-group col-md-6">
                  <select id="inputState" class="form-control">
                <option selected="" disabled="">Tipo de rol</option>
                <option>Maestro</option>
                <option>Alumno</option>
              </select>
            </div>

           
            </div>
           <div class="content-btn">
              <button type="submit" class="btn div-boton">Registrar</button>
           </div>
            
          </form>
      </div>
    

    
    


@endsection