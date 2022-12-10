<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>


<!-- <div class="d-flex flex-wrap">
        @foreach($usuarios as $usuario)
                <div class="card text-bg m-1" style="width: 400px;", >
                
               
               
                <div class="card-body">
                    <h5 class="card-text">{{$usuario['nombre']}}</h5>
                    <p class="card-text">{{$usuario['email']}}</p>
                    <p class="card-text">{{$usuario['edad']}}</p>
                  
                </div>
                </div>

                
        @endforeach
    </div> -->



<div class="container "  >

<div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">Lista de Usuarios</h1>
    
        </div>
    </div>


   
    <table class="table">
 
 
  <thead>
    <tr> 
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Edad</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)
    <tr>
      <th scope="row">{{$usuario['id']}}</th>
      <td>{{$usuario['nombre']}}</td>
      <td>{{$usuario['email']}}</td>
      <td>{{$usuario['edad']}}</td>
    </tr>
    @endforeach
  </tbody>
 
</table>






</div>

    



    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>