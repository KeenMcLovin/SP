@extends('layouts.struct')

@section('body')

@include('layouts.navbaradmin')
@yield('content')

<div class="col-3">
    &nbsp;
</div>
<div class="col-6 container">

    <div class="alert alert-primary alert-dismissible" style="z-index: 999;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Bienvenido y gracias por unirte, esperamos disfrutes de todos nuestros servicios.
    </div>
    
    <div class="alert alert-info alert-dismissible" style="z-index: 999;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Para poder agregar productos antes debe agregar sus proveedores.
    </div>

    <div class="alert alert-warning alert-dismissible" style="z-index: 999;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Agrege sus servicios lo antes posible para que los clientes puedan agendar una cita.
    </div>
    <br>
</div>
<div class="col-3">
    &nbsp;
</div>

<div class="col-3">
		&nbsp;
	</div>
	
	<div id="demo" class="carousel slide col-12" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/mod1.png" alt="Los Angeles" width="100%" style="filter: blur(6px);">
				<div class="carousel-caption">
						<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/mod1.png" alt="Chicago" width="100%" style="filter: blur(6px);">
				<div class="carousel-caption">
						<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/mod1.png" alt="New York" width="100%" style="filter: blur(6px);">
				<div class="carousel-caption">
						<p>We had such a great time in LA!</p>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>

@stop