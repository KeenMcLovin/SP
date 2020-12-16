<div id="page-wrapper">
<div style="margin-top: -4%;">
    <section id="header">

    <!-- Logo -->
        <br><br>
        <h1><a href="#">Barber Skyn</a></h1>
    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{url('inicio')}}">Inicio</a></li>								
                <li><a href="{{route('allproductos')}}">Todos los produtos</a></li>
                <li><a href="{{url('miscompras')}}">Mis compras</a></li>
                <li><a href="{{url('minegocio')}}">Mi negocio</a></li>
                <li style="position: relative;">
                    <a style="background: white;" data-toggle="modal" data-target="#icon" name="login"><img src="images/lml1.jpeg" width="40px" style="opacity: 1;">
                        @if (session()->get('usuario'))
                            <b>{{session()->get('usuario')}}</b>
                        @endif
                    </a>
                </li>
                <li class="current"><a href="{{url('logout')}}">Salir</a></li>
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
                                
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><b style="color: white;">Cerrar</b></button>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>