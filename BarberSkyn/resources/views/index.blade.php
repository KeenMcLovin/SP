@extends('layouts.struct')


@section('body')

	<div id="page-wrapper">

	<section id="header">

		<!-- Logo -->
			<h1><a href="#">Barber Skyn</a></h1>

		<!-- Nav -->
	</section>

	<section id="intro" class="container">
		<div class="row">
			<div class="col-6 col-12-medium">
				<section class="first">
					<i class="icon solid featured fa-cog"></i>
					<header>
						<h2>Iniciar Sesión</h2>
					</header>
					<ul class="actions">
						<li><a href="#" class="button large" data-toggle="modal" data-target="#iniciar">Inicio</a></li>
					</ul>
					<div class="modal fade" id="iniciar">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Iniciar Sesión</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<div class="col-2">&nbsp;</div>
									<div class="col-8">
										<div class="form-group">
											<form action="{{route('registro.entrar')}}" method="post">
												@csrf
												<label for="usr" autocomplnete="off">Usuario:</label>
												<input type="text" class="form-control" placeholder="Nombre" name="usuario" required="required" onkeypress="return soloLetras(event)">
												<label for="pwd">Contraseña:</label>
													<input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required="required">
													<br>
													<button class="btn btn-primary">Ingresar</button>
												</form>
										</div>
									</div>
									<div class="col-2">&nbsp;</div>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="col-6 col-12-medium">
				<section>
					<i class="icon solid featured alt fa-bolt"></i>
					<header>
						<h2>Regristrarse como cliente</h2>
					</header>
					<ul class="actions">
						<li><a href="#" class="button large" data-toggle="modal" data-target="#registro" style="background: gray;">Registro</a></li>
					</ul>
					<div class="modal fade" id="registro">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Regristrarse como cliente</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<div class="col-2">&nbsp;</div>
									<div class="col-8">
										<div class="form-group">
											<form action="" method="post">
												@csrf
												<label for="usr"><b>Nombre:</b></label>
												<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="required" onkeypress="return soloLetras(event)">
												<label for="usr"><b>Apellido Paterno:</b></label>
												<input type="text" class="form-control" placeholder="Apellido Paterno" name="apaterno" id="apaterno" required="required" onkeypress="return soloLetras(event)">
												<label for="usr"><b>Número telefonico:</b></label>
												<input type="text" maxlength="10" class="form-control" id="usr" placeholder="Telefono" name="telefono" id="telefono" required="required" onkeypress="return soloNumeros(event)">
												<br>
												<h5><b style="color: gray;">Datos para inicio de sesión</b></h5>
												<hr>
												<label for="usr"><b>Usuario:</b></label>
												<input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required="required" onkeypress="return soloLetras(event)">
												<label for="pwd"><b>Contraseña:</b></label>
													<input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña" required="required">
													<br>
													<button class="btn btn-primary">Registrar</button>
											</form>
										</div>
									</div>
									<div class="col-2">&nbsp;</div>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
								</div>

							</div>
						</div>
					</div>
				</section> 
			</div>
			<div class="col-6 col-12-medium" style="display: none;">
				<section class="last">
					<i class="icon solid featured alt2 fa-star"></i>
					<header>
						<h2>Registrarse como negocio</h2>
					</header>
					<ul class="actions">
						<li><a href="#" class="button alt large" data-toggle="modal" data-target="#registro1">Registro</a></li>
					</ul>
					<div class="modal" id="registro1">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Registrarse como negocio</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<div class="col-2">&nbsp;</div>
									<div class="col-8">
										<div class="form-group">
											<form action="php/registroNegocio.php" method="post" enctype="multipart/form-data">
												@csrf
												<label for="usr"><b>Nombre:</b></label>
												<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="required" onkeypress="return soloLetras(event)">
												<label for="usr"><b>Hora apertura:</b></label>
												<input type="time" class="form-control" name="horaApertura" id="horaApertura" required="required">
												<label for="usr"><b>Hora cierre:</b></label>
												<input type="time" class="form-control" name="horaCierre" id="horaCierre" required="required">
												<label for="usr"><b>Ubicación:</b></label>
												<input type="text" class="form-control" placeholder="Ubicación" name="ubicacion" id="ubicacion" required="required">
												<label for="usr"><b>Numero Telefonico:</b></label>
												<input type="text" class="form-control" placeholder="Numero Telefonico" name="telefono" id="telefono" required="required" onkeypress="return soloNumeros(event)">
												<label for="usr"><b>Foto:</b></label>
												<input type="file" class="form-control" name="imagen" id="imagen" required="required">
												<br>
												<h5><b style="color: gray;">Datos para inicio de sesión</b></h5>
												<hr>
												<label for="usr"><b>Usuario:</b></label>
												<input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required="required" onkeypress="return soloLetras(event)">
												<label for="pwd"><b>Contraseña:</b></label>
													<input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña" required="required">
													<br>
													<button class="btn btn-primary" name="registrar">Registrar</button>
											</form>
										</div>
									</div>
									<div class="col-2">&nbsp;</div>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
								</div>

							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="col-12">
				@if ( session('respuesta') )
					<div class="alert alert-success">{{ session('respuesta') }}</div>
				@endif
			</div>
		</div>
	</section>

	<section id="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-4 col-6-medium col-12-small">
					<section style="text-align: justify;">
						<header>
							<h2><b style="color:gray;">Referencias:</b></h2>
						</header>
						<ul class="divided">
							<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
							<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
							<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
							<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
							<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
							<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
						</ul>
					</section>
				</div>
				<div class="col-4 col-12-medium">
					&nbsp;
				</div>	
				<div class="col-4 col-12-medium">
					<section>
						<header>
							<h2>Vitae tempor lorem</h2>
						</header>
						<ul class="social">
							<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
							<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
							<li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
							<li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
							<li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="contact">
							<li>
								<h3 style="color: black">Dirección:</h3>
								<p>
									Garage Inc.<br />
									52740 Avenida Reforma<br />
									CDMX
								</p>
							</li>
							<li>
								<h3 style="color: black">Correo:</h3>
								<p><a href="#">villa.isc.tec@gmail.com</a></p>
							</li>
							<li>
								<h3 style="color: black">Telefono:</h3>
								<p>(722) 580-3007</p>
							</li>
						</ul>
					</section>
				</div>
				<div class="col-12">

					<!-- Copyright -->
						<div id="copyright">
							<ul class="links">
								<li>&copy; Barber Skyn. Todos los derechos reservados.</li><li>Diseñado en: HTML5, CSS3, PHP, JS, JQUERY</li>
							</ul>
						</div>

				</div>
			</div>
		</div>
	</section>

	</div>

	<!-- Scripts -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
	<script src="{{asset('assets/js/browser.min.js')}}"></script>
	<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
	<script src="{{asset('assets/js/util.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>

@stop