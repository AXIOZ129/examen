<div>
  <div class="card">
<div class="card-header">
<h3 class="card-title">USUARIOS</h3>
</div>

<table class="table table-bordered">
        <thead>
            <tr>
            <th style="width: 10px">ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th style="width: 40px">Acciones</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['nombre']}}</td>
            <td>{{$usuario['email']}}</td>
         
        </tr>
        @endforeach

 
           
        </tbody>
    </table>


<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">«</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>
</div>
</div>


</div>
