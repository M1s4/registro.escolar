
   <!--Esta seccion se extiende con nombre de layout para poder utilizarla en layout.blade.php -->
      @extends('layout') 
    <!--exta secction se nombre contenido y se extiende con nombre de layout desde otro archivo -->
    <!-- Estas en la plantilla registrar.blade.php-->
        @section('contenido')
     
          <!--content-principal -->
           <div class="content-home">
               
              <!--content left -->
            <div class="content-left">
                  <div class="content-imagen">
                      <div class="imagen_estudiante">
                         <img src="https://cdn.pixabay.com/photo/2017/04/29/08/56/digital-2270281_1280.jpg" class="img_perfil" alt="">
                      </div>
                  </div>

                  <div class="content-menu-user">
                      <div class="perfil">
                          <a href=""> Perfil</a>
                      </div>

                      <div class="ciclos-escolar">
                         <a href=""> Ciclo escolar</a>
                      </div>

                      <div class="salir">

                      </div>

                  </div>
            </div>
              <!--fIN content left -->

              <!--content right -->
              <div class="content-right">

              <div class="content-resultado">
            <!--Aqui listamos de la tabla materias el nombre y el id de la materia -->
                 
            <!--Aqui divstamos de la tabla usuarios el nombre y el correo del usuario -->
                 
                   


          </div>
          
      <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Materias</th>
      <th scope="col">Usuarios</th>
      <th scope="col">Correo</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> @forelse ($materias as $materias)
                      
                      <div class="materia">        
                     
                      {{ $materias ->nombre }}
                      
                      </div>
                  @empty
                   <div>No se registraron usuarios</div>
                  @endforelse</td>
                  <td>
    @forelse ($usuarios as $usuarios)                  
                   <div class="nombre">                   
                      {{ $usuarios ->nombre }}              
                    </div>             
               @empty
                <div>No hay materias registradas</div>
               @endforelse               
               </td>
    </tr>
    <tr>
    </tr> 
  </tbody>
</table>
         

              </div>
              <!--FINcontent left -->
          
          <!--fin content principal -->
            </div>
    
    


        @endsection