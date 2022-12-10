<div >



  <div class="card">
    
<div class="card-header">
<h3 class="card-title">CLIENTES</h3>
</div>

<table class="table table-bordered">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            
            <th >Acciones</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente['id']}}</td>
            <td>{{$cliente['Nombre']}}</td>
            <td>{{$cliente['Ape1']}}</td>
            <td>
            <a class="btn btn-info btn-sm" title="Mostrar mas" href="clientes/{{$cliente['id']}}/show"><i class="fa fa-eye "></i>  </a>
            <a class="btn btn-primary btn-sm " title="Editar" href="clientes/{{$cliente['id']}}/edit" ><i class="fa fa-edit "></i>  </a>
            <button wire:click='eliminar({{$cliente["id"]}})' class="btn btn-danger btn-sm " title="Eliminar"><i class="fa fa-trash "></i>  </button>

            </td>
         
        </tr>
        @endforeach

 
           
        </tbody>
    </table>
    <a class="btn btn-success btn-sm mb-3" href="/clientes/crear"><i class="fa fa-user-plus"></i> Crear</a>

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
