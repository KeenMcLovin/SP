@extends('layouts.str')

@section('body')

@include('layouts.navbaradmin')
@yield('content')

<div class="col-12" style="margin: 0px; padding: 0px; margin-top: -2.1%;">
    <div class="col-4" style=" padding: 3%; position: fixed; float: left;">
        <br><br>
        <h2><b style="color: gray;">Registrar nuevo Proveedor</b></h2>
        <br><br><br>
        <div class="col-12">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <label for="email"><b>Nombre:</b></label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Apellido paterno:</b></label>
                    <input type="text" class="form-control" placeholder="Apellido paterno" id="apaterno" name="apaterno" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Contacto:</b></label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Contacto" id="contacto" name="contacto" required="required" onkeypress="return soloNumeros(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Dirección:</b></label>
                    <textarea class="form-control" placeholder="Dirección" id="direccion" name="direccion" required="required" name="" id="" cols="" rows="4"></textarea>
                </div>
                <br><br>
                <button class="button btn-danger" name="reg">Registrar</button>
            </form>
        </div>
    </div>
    <div class="col-8" style="padding-left: 3%; padding-right: 3%; padding-bottom: 3%; float: right; position: relative; background: #F3F3F3;">
        <section>
            <br><br>
            <div class="col-4">
                <form action="" method="post">
                    <button class="button" style="background: #2565CD;" name="activos">Proveedores activos</button>
                </form>
                
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <button class="button" style="background: #2565CD;" name="inactivos">Proveedores inactivos</button>
                </form>
            </div>
            <div class="col-4">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" id="myInput">
                <br>
            </div>

            <table class="table table-hover" style="margin-top: 10%;">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center;">Nombre completo</th>
                        <th style="text-align: center;">Contacto</th>
                        <th style="text-align: center;">Dirección</th>
                        <th style="text-align: center;">Estado</th>
                    </tr>
                </thead>								
            </table>
                        
        </section>
    </div>
</div>

@stop