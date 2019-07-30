<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista de alumnos y materias a las que se registro</h1>
           



        <hr>
            <ul>
               @forelse($usuarios as $usuarios)
                   <li>{{ $usuarios -> nombre }}</li>
                   <li>{{ $usuarios -> email }}</li>
                 @empty 
                   <li>No ahi usuario registrados</li>
                @endforelse
            </ul>
       
             
</body> 
</html>