<section id="header" style="margin-top: -4%;">
    <br><br>
    <h1 class="col-4 col-s-3">
        <a href="#">Barber Skyn</a>
    </h1>

    <nav id="nav" class="col-8 col-s-9" style="margin-top: -0%;" >
        <ul>
            <li><a href="{{url('inicio')}}">Inicio</a></li>								
            <li><a href="{{route('misproveedores')}}">Mis proveedores</a></li>
            <li><a href="{{route('misproductos')}}">Mis productos</a></li>
            <li><a href="{{url('misventas')}}">Mis ventas</a></li>
            <li class="current"><a href="{{url('minegocio')}}">Mi negocio</a></li>
            <li style="position: relative;">
                <a style="background: white;" data-toggle="modal" data-target="#icon" name="login"><img src="images/lml1.jpeg" width="40px" style="opacity: 1;">
                    @if (session()->get('usuario'))
                        <b>{{session()->get('usuario')}}</b>
                    @endif
                </a>
            </li>
        </ul>
    </nav>
    <div class="modal" id="icon">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><h3><b style="color: gray;">Datos Personales</b></h3></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="col-2">&nbsp;</div>
                    <div class="col-8">
                            
                        <form class="was-validated" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                            <label for="usr"><b>Nombre del establecimiento:</b></label>
                            <input class="form-control" type="text" required="" name="nombre" onkeypress="return soloLetras(event)" value="" >
                            <label for="usr"><b>Hora apertura:</b></label>
                            <input class="form-control" type="time" required="" name="horaApertura" value="">
                            <label for="usr"><b>Hora cierre:</b></label>
                            <input class="form-control" type="time" required="" name="horaCierre" value="">
                            <label for="usr"><b>Ubicación:</b></label>
                            <textarea class="form-control" name="ubicacion" id="" cols="" rows="3"></textarea>
                            <label for="usr"><b>Contacto:</b></label>
                            <input maxlength="10" class="form-control" type="text" required="" name="contacto" onkeypress="return soloNumeros(event)" value="">
                            <label for="usr"><b>Imagen:</b></label>
                            <img style="border-radius: 5px; opacity: 1;" width="100%" src="" alt="">
                            <br><br>
                            <input type="file" name="imagen">
                            <br>
                            <label for="usr"><b>Usuario:</b></label>
                            <input class="form-control" type="text" required="" name="usuario" value="">
                            <label for="usr"><b>Contraseña:</b></label>
                            <input class="form-control" type="text" required="" name="contraseña" value="">
                            <br>
                            <button class="btn btn-secondary" name="actest"><b style="color: white;">Actualizar mi información</b></button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="index.html" class="btn btn-dark"><b style="color: white;">Salir del sitio</b></a>
                        </form>
                                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><b style="color: white;">Cerrar</b></button>
                </div>
            </div>
        </div>
        </div>
    <br><br>
    </div>
</section>