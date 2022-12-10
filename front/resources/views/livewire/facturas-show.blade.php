<div>
    <br>
    <br>
    <br>
        <div class="col-md-8 mx-auto ">

            <div class="card card-widget widget-user-2">

                <div class="widget-user-header bg-info">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://www.gasmart.mx/wp-content/uploads/2017/12/Factura_01-400x400.png
                        " alt="User Avatar">
                    </div>

                    <h3 class="widget-user-username">{{$factura['clientes'][0]['Nombre']}}</h3>
                    <h5 class="widget-user-desc">{{$factura['id']}}</h5>
                </div>
                <div class="card-footer p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span  class="nav-link">
                                ID <span class="float-right  badge bg-info">{{$factura['id']}}</span>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span  class="nav-link">
                                Fecha <span class="float-right">{{$factura['Fecha']}}</span>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span  class="nav-link">
                                Numero <span class="float-right">{{$factura['Numero']}}</span>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span  class="nav-link">
                                ID Cliente <span class="float-right badge ">{{$factura['id_cliente']}}</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>


    </div>
