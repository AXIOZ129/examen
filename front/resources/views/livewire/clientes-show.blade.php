<div>
<br>
<br>
<br>
    <div class="col-md-8 mx-auto ">

        <div class="card card-widget widget-user-2">

            <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="https://www.citypng.com/public/uploads/preview/free-round-flat-male-portrait-avatar-user-icon-png-11639648873oplfof4loj.png" alt="User Avatar">
                </div>

                <h3 class="widget-user-username">{{$cliente['Nombre']}}</h3>
                <h5 class="widget-user-desc">{{$cliente['Ape1']}}</h5>
            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span  class="nav-link">
                            ID <span class="float-right  badge bg-info">{{$cliente['id']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Nombre <span class="float-right">{{$cliente['Nombre']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Apellido Paterno <span class="float-right">{{$cliente['Ape1']}}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span  class="nav-link">
                            Apellido Materno <span class="float-right badge ">{{$cliente['Ape2']}}</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</div>
