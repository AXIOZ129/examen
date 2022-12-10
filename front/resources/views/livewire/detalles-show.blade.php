<div>
<br>
<br>
<br>
    <div class="col-md-8 mx-auto ">

        <div class="card card-widget widget-user-2">

            <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="https://cdn-icons-png.flaticon.com/512/411/411745.png
                    " alt="User Avatar">
                </div>


            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span  class="nav-link">
                            ID <span class="float-right  badge bg-info">{{$detalle['id']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Cantidad <span class="float-right">{{$detalle['Cantidad']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Descripcion <span class="float-right">{{$detalle['Descripcion']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Precio <span class="float-right badge ">{{$detalle['Precio']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            ID factura <span class="float-right badge ">{{$detalle['facturas'][0]['id']}}</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</div>
