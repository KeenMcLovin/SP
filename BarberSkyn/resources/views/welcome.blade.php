<!DOCTYPE html>
<html lang="en">
<head>
    <title>Barber Skyn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        html{
            font-family: arial !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">BarberSkyn</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">Iniciar sesión</a></li>
                <li><a href="#" data-toggle="modal" data-target="#registro">Registrarse</a></li>
            </ul>
        </div>
    </nav>

    @if ( session('respuesta') )
        <div class="alert alert-success">{{ session('respuesta') }}</div>
    @endif

    <div id="registro" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro de cliente</h4>
            </div>
            <div class="modal-body" align="center">
                <form action="{{route('registro.crear')}}" method="post">
                    @csrf
                    <label for="usr"><b>Nombre:</b></label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="required" onkeypress="return soloLetras(event)">
                    <label for="usr"><b>Apellido Paterno:</b></label>
                    <input type="text" class="form-control" placeholder="Apellido Paterno" name="apaterno" id="apaterno" required="required" onkeypress="return soloLetras(event)">
                    <label for="usr"><b>Número telefonico:</b></label>
                    <input type="text" maxlength="10" class="form-control" placeholder="Telefono" name="contacto" id="contacto" required="required" onkeypress="return soloNumeros(event)">
                    <br>
                    <h5><b style="color: gray;">Datos para inicio de sesión</b></h5>
                    <hr>
                    <label for="usr"><b>Usuario:</b></label>
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required="required" onkeypress="return soloLetras(event)">
                    <label for="pwd"><b>Contraseña:</b></label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña" required="required">
                    <br>
                    <button class="btn btn-info">Registrar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
    </div>

</body>
</html>
