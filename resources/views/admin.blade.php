
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

              <div class="content-resultado"
            <!--Aqui listamos de la tabla materias el nombre y el id de la materia -->
                   @forelse ($materias as $materias)
                      
                       <div class="materia">        
                       <h3> Materia</h3>
                       {{ $materias ->nombre }}
                       
                       </div>
                   @empty
                    <div>No se registraron usuarios</div>
                   @endforelse
            <!--Aqui divstamos de la tabla usuarios el nombre y el correo del usuario -->
                 
                   @forelse ($usuarios as $usuarios)
                   
                       <div class="nombre">
                       <h3>Nombre de usuario</h3>
                          {{ $usuarios ->nombre }}
                    <h3>Correo</h3>
                              {{ $usuarios ->email }}
                        </div>  
                    
                     
                    <div class="correo">
                         
                    
                    </div>                  
                   @empty
                    <div>No hay materias registradas</div>
                   @endforelse


          </div>
          
               <!--tabla de bootstrap --> 
               <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Materia</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
      @forelse ($materias as $materias)
      {{ $materias ->nombre }}
      @endforelse
      @empty
                    <div>No se registraron usuarios</div>
      </td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

               <!--fin tabla bootstrat -->
         

              </div>
              <!--FINcontent left -->
          
          <!--fin content principal -->
            </div>
    
    


        @endsection