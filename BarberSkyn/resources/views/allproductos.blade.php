@extends('layouts.struct')

@section('body')

@include('layouts.navbar')
@yield('content')

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section id="main">
                    <header class="major">
                        <h2>Productos</h2>
                    </header>
                    <div class="row">
                        @foreach($productos as $producto)
                        <div class="col-3 col-6-medium col-12-small">
                            <section class="box">
                                <a href="#" class="image featured"><img src="productos/{{$producto->foto}}" alt="" /></a>
                                <header style="margin-top: -13%;">
                                    <h3><b style="color: mediumseagreen;">{{$producto->nombre}}</b></h3>
                                </header>
                                <p><b>Descripción:</b> {{$producto->descripcion}}.</p>
                                <p><b>Precio:</b> $ {{$producto->costo}}</p>
                                <footer>
                                    <ul class="actions">
                                        <li>
                                            <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#detalles{{$producto->id}}"><b style="color: white;">Comprar</b></a>
                                            
                                            <div class="modal fade" id="detalles{{$producto->id}}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form action="" method="post" style="padding-left:20%; padding-right:20%;">
                                                                <img width="50%" src="productos/{{$producto->foto}}" alt="">
                                                                <br><br><br>
                                                                <label for="usr"><b>Nombre del producto:</b></label>
                                                                <input name="nombre" readonly type="text" class="form-control" value="{{$producto->nombre}}">
                                                                <label for="usr"><b>Descripción:</b></label>
                                                                <textarea class="form-control" readonly name="descripcion" id="" cols="" rows="3">{{$producto->descripcion}}.</textarea>
                                                                <label for="usr"><b>Precio:</b></label>
                                                                <input name="costo" readonly type="text" class="form-control" value="{{$producto->precioPublico}}">
                                                                <label for="usr"><b>Cantidad:</b></label>
                                                                <input name="cantidad" type="text" class="form-control" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                                                <br>
                                                                <button class="btn btn-info" name="comprar"><b style="color: white;">Comprar</b></button>
                                                                <br><br>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </footer>
                            </section>
                        </div>
                        
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

@stop