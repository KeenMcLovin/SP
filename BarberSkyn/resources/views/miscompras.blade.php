@extends('layouts.struct')

@section('body')

@include('layouts.navbar')
@yield('content')

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section id="main">
                    
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th style="text-align: center;">Nombre producto</th>
                                <th style="text-align: center;">Cantidad</th>
                                <th style="text-align: center;">Monto final</th>
                                <th style="text-align: center;">Hora</th>
                                <th style="text-align: center;">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</section>

@stop