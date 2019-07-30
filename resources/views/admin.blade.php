
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
            <!--Aqui listamos de la tabla materias el nombre y el id de la materia -->
                   @forelse ($materias as $materias)
                       <li>{{ $materias ->nombre }}</li>
                       <li>{{ $materias ->id_materias }}</li>
                   @empty
                    <li>No se registraron usuarios</li>
                   @endforelse
            <!--Aqui listamos de la tabla usuarios el nombre y el correo del usuario -->

                   @forelse ($usuarios as $usuarios)
                   <li>{{ $usuarios ->id_usuario }}</li>
                       <li>{{ $usuarios ->nombre }}</li>
                       <li>{{ $usuarios ->email }}</li>
                   @empty
                    <li>No hay materias registradas</li>
                   @endforelse


         

              </div>
              <!--FINcontent left -->
          
          <!--fin content principal -->
            </div>
    
    


        @endsection