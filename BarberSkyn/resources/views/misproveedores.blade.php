@extends('layouts.str')

@section('body')

@include('layouts.navbaradmin')
@yield('content')

<div class="col-12" style="margin: 0px; padding: 0px; margin-top: -2.1%;">
    <div class="col-4" style=" padding: 3%; position: fixed; float: left;">
        @if ( session('respuesta') )
            <div class="alert alert-success">{{ session('respuesta') }}</div>
        @endif
        @if ( session('respuestaerror') )
            <div class="alert alert-danger">{{ session('respuesta') }}</div>
        @endif
        <br>
        <h2><b style="color: gray;">Registrar nuevo Proveedor</b></h2>
        <br><br><br>
        <div class="col-12">
            <form action="{{route('proveedor.agregar')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email"><b>Nombre:</b></label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Apellido paterno:</b></label>
                    <input type="text" class="form-control" placeholder="Apellido paterno" name="apaterno" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Contacto:</b></label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Contacto" name="contacto" required="required" onkeypress="return soloNumeros(event)">
                </div>
                <div class="form-group">
                    <label for="email"><b>Dirección:</b></label>
                    <textarea class="form-control" placeholder="Dirección" name="direccion" required="required" rows="4"></textarea>
                </div>
                <br><br>
                <button class="button btn-danger" name="reg">Registrar</button>
            </form>
        </div>
    </div>
    <div class="col-8" style="padding-left: 3%; padding-right: 3%; padding-bottom: 3%; float: right; position: relative; background: #F3F3F3;">
        <section>
            <br><br>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center;">No. Proveedor</th>
                        <th style="text-align: center;">Nombre completo</th>
                        <th style="text-align: center;">Contacto</th>
                        <th style="text-align: center;">Dirección</th>
                        <th style="text-align: center;">Editar</th>
                        <th style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->id}}</td>
                            <td>{{$proveedor->nombre}}&nbsp;{{$proveedor->apaterno}}</td>
                            <td>{{$proveedor->contacto}}</td>
                            <td>{{$proveedor->direccion}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>						
            </table>
                        
        </section>
    </div>
</div>

@stop