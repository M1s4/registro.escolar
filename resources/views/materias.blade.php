<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/add.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <title>Document</title>
    </head>
<body>
    <div class="content-principal">
        @include('header')
      <div class="content-form">
        <h2>Materias </h2>
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                
                <input type="email" class="form-control" id="inputEmail4" placeholder="Usuario">
              </div>
              <div class="form-group col-md-6">
              
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
       
              <input type="text" class="form-control" id="inputAddress" placeholder="Direccion">
            </div>
           
            <div class="form-row">
              <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCity" placeholder="Telefono">
              </div>
              <div class="form-group col-md-4">
                    <select id="inputState" class="form-control">
                  <option selected disabled>Materia</option>
                  <option>Matematicas</option>
                  <option>Quimica</option>
                  <option>Redes</option>
                  <option>Fisica</option>
                  <option>Historia</option>
                 
                </select>
              </div>
              <div class="form-group col-md-2">
                <input type="text" class="form-control" id="inputZip" placeholder="edad">
              </div>
            </div>
           <div class="content-btn">
              <button type="submit" class="btn div-boton">Registrar</button>
           </div>
            
          </form>
      </div>

      @include('footer')
    </div>

    
</body>
</html>