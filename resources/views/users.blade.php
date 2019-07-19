<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Listando un array con nombres silumando una BD con un ORM</h1>
           



        <hr>
            <ul>
               @forelse($users as $users)
                   <li>{{$users}}</li>
                 @empty 
                   <li>No ahi usuario sregistrados</li>
                @endforelse
            </ul>
       
             
</body> 
</html>