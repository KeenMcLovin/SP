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
            <form action="{{route('producto.agregar')}}" method="post" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-6">
                    <label for="sel1"><b>Proveedor:</b></label>
                    <select class="form-control" name="idprov" required="required">
                        <option style="display: none;">Proveedor</option>
                        @foreach($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}">{{$proveedor->nombre}}&nbsp;{{$proveedor->apaterno}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Nombre del producto:</b></label>
                    <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre" required="required" onkeypress="return soloLetras(event)">
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Costo:</b></label>
                    <input type="text" class="form-control" placeholder="Costo" name="costo" required="required" onkeypress="return soloNumerosp(event)">
                </div>
                <div class="form-group col-6">
                    <label for="usr"><b>Precio al público:</b></label>
                    <input type="text" class="form-control" placeholder="Precio al público" name="precioPublico" required="required" onkeypress="return soloNumerosp(event)">
                </div>
                <div class="form-group">
                    <label for="usr"><b>Imagen:</b></label>
                    <input accept="image/*" name="imagenproducto" type="file" required="required">
                </div>
                <div class="form-group">
                    <label for="usr"><b>Descripción:</b></label>
                    <textarea name="descripcion" rows="3" class="form-control" placeholder="Descripción" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label for="usr"><b>Cantidad:</b></label>
                    <input type="text" class="form-control" placeholder="Cantidad" name="cantidad" required="required" onkeypress="return soloNumeros(event)">
                </div>
                <br>
                <button class="button btn-danger" name="reg" id="reg">Registrar</button>
            </form>
        </div>
    </div>
    <div class="col-8" style="padding-left: 3%; padding-right: 3%; padding-bottom: 3%; float: right; position: relative; background: #F3F3F3;">
        <section>
            <br><br><br><br>
            <div class="col-12">
                <table class="table table-hover" style="margin-top: 0%;">
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
                    <tbody id="myTable">
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->id_proveedor}}</td>
                                <td>$ {{$producto->costo}}</td>
                                <td>$ {{$producto->precioPublico}}</td>
                                <td><img src="productos/{{$producto->foto}}" alt="" width="100px"></td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->cantidad}}</td>
                                <td>{{$producto->estado}}</td>
                            </tr>

                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>					
    </div>
</div>

@stop