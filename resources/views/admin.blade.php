
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

                      <div class="ciclos-escolar">
                         <a href=""> Materias</a>
                      </div>
                       
                      <div class="ciclos-escolar">
                         <a href=""> Profesores</a>
                      </div>

                      <div class="ciclos-escolar">
                         <a href=""> Usuarios</a>
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
                 
                   


          
          
 <table class="table table-hover"> 
  <thead>
    <tr>
      <th scope="col" class="table-info">Usuarios</th>
      <th scope="col" class="table-info">Correo</th>
      <th scope="col" class="table-info">Configuraciones</th>


    </tr>
  </thead>
  <tbody class="">
  @forelse ($usuarios as $usuarios) 
    <tr>
 

                  <td>
                    
                   <div class="nombre">                   
                      {{ $usuarios ->nombre }}              
                    </div>             
                   
               </td>

               <td>
                    
                    <div class="correo">                   
                       {{ $usuarios ->email }}              
                     </div>             
                    
                </td>

                
               <td>
                    
                    <div class="iconos">                   
                       <div><img src="images/ver.svg" alt=""> </div>
                       <div><img src="images/editar.svg" alt=""> </div>
                       <div><img src="images/delete.svg" alt=""> </div>
                       <div><img src="images/add.svg" alt=""> </div>

                     </div>             
                    
                </td>

           
            
    </tr>
    @empty
                <div>No hay materias registradas</div>
               @endforelse       

    <tr>
    </tr> 
  </tbody>


  </table>










     <!--Tabla de materias -->
  <table class="table table-borderless">
  <thead>
    <tr>

      <th scope="col">Materias</th>
    
    </tr>
  </thead>
  <tbody>
   
      @forelse ($materias as $materias)
      <tr>
     

          <td> 
            <div class="materia">        
                {{ $materias ->nombre }}
            </div>
           @empty
             <div>No se registraron usuarios</div>
        
        </td>
    </tr> 
    @endforelse
      
  </tbody>
</table>
    
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Ciclo activo</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>
    @forelse ($ciclo as $ciclo)                  
                   <div class="nombre">                   
                      {{ $ciclo ->nombre }}              
                    </div>             
               @empty
                <div>No hay materias registradas</div>
               @endforelse               
    </td>
    </tr> 
  </tbody>
</table>
<!-- -->

<!-- -->
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Profesores</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>
    @forelse ($profesores as $profesores)                  
                   <div class="nombre">                   
                      {{ $profesores ->nombre }}              
                    </div>             
               @empty
                <div>No hay materias registradas</div>
               @endforelse               
               </td>
    </tr> 
  </tbody>
</table>
<!-- -->







     </div>
   <!-- Fin de  content-right-->








              <!--FINcontent left -->
          
          <!--fin content principal -->
            </div>
    
    


        @endsection