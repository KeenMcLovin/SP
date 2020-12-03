@extends('layouts.str')

@section('body')

@include('layouts.navbaradmin')
@yield('content')

<div class="col-12" style="margin: 0px; padding: 0px; margin-top: -2.1%;">
    <div class="col-4" style=" padding: 3%; position: fixed; float: left;">
        <br>
        <h2><b style="color: gray;">Registrar nuevo producto</b></h2>
        <br><br>
        <div>
            <form action="" method="post" id="myForm" enctype="multipart/form-data">
                <div class="form-group col-6">
                    <label for="sel1"><b>Proveedor:</b></label>
                    <select class="form-control" id="sel1" name="idprov" required="required">
                        <option style="display: none;">Proveedor</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Nombre del producto:</b></label>
                    <input type="text" class="form-control" placeholder="Nombre del producto" id="nombre" name="nombre" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Costo:</b></label>
                    <input type="text" class="form-control" placeholder="Costo" id="costo" name="costo" required="required" onkeypress="return soloNumerosp(event)">
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Precio al público:</b></label>
                    <input type="text" class="form-control" placeholder="Precio al público" id="precioPublico" name="precioPublico" required="required" onkeypress="return soloNumerosp(event)">
                </div>
                <div class="form-group">
                    <label for="usr"><b>Imagen:</b></label>
                    <input type="file" name="imagen" id="imagen" required="required">
                </div>
                <div class="form-group">
                    <label for="usr"><b>Descripción:</b></label>
                    <textarea name="descripcion" id="comment" rows="3" class="form-control" placeholder="Descripción" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label for="usr"><b>Cantidad:</b></label>
                    <input type="text" class="form-control" placeholder="Cantidad" id="cantidad" name="cantidad" required="required" onkeypress="return soloNumeros(event)">
                </div>
                <br>
                <button class="button btn-danger" name="reg" id="reg">Registrar</button>
            </form>
        </div>
    </div>
    <div class="col-8" style="padding-left: 3%; padding-right: 3%; padding-bottom: 3%; float: right; position: relative; background: #F3F3F3;">
        <section>
            <br><br>
            <div class="col-3">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <button class="button" style="background: #2565CD;" name="pedido">Pedido sugerido</button>
                </form>
            </div>
            <div class="col-3">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <button class="button" style="background: #2565CD;" name="activos">Productos activos</button>
                </form>
            </div>
            <div class="col-3">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <button class="button" style="background: #2565CD;" name="inactivos">Productos inactivos</button>
                </form>
            </div>
            <div class="col-3">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" id="myInput">
            </div>
            <div class="col-12">
                <table class="table table-hover" style="margin-top: 6%;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center;">Nombre</th>
                            <th style="text-align: center;">Proveedor</th>
                            <th style="text-align: center;">Costo</th>
                            <th style="text-align: center;">Precio al publico</th>
                            <th style="text-align: center;">Imagen</th>
                            <th style="text-align: center;">Descripción</th>
                            <th style="text-align: center;">Cantidad</th>
                            <th style="text-align: center;">Estado</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>					
    </div>
</div>

@stop