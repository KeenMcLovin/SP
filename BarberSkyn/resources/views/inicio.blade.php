@extends('layouts.struct')

@section('body')

@include('layouts.navbar')
@yield('content')

<!-- Banner -->
<section id="banner" style="z-index: -2;">
    <header>
        <h2>Bienvenido y gracias por visitarnos.</h2>
        <p>Productos para toda tipo.</p>
    </header>
</section>

<!-- Intro -->
    <section id="intro" class="container" style="z-index: -2;">
        <div class="row">
            <div class="col-4 col-12-medium">
                <section class="first">
                    <i class="icon solid featured fa-cog"></i>
                    <header>
                        <h2>Variedad de Productos</h2>
                    </header>
                    <p>Amplia variedad de productos para cualquier persona.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="middle">
                    <i class="icon solid featured alt fa-bolt"></i>
                    <header>
                        <h2>Servicios para todos</h2>
                    </header>
                    <p> Servicio para todo tipo de persona.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="last">
                    <i class="icon solid featured alt2 fa-star"></i>
                    <header>
                        <h2>Encuentra tu estilo ideal.</h2>
                    </header>
                    <p>Siempre pensando en nuestros clietes recomendando lo mejor para ellos.</p>
                </section>
            </div>
        </div>
        <footer>
            <ul class="actions">
                <li><a href="#" class="button large">Comienza tu estilo</a></li>
                <li><a href="#" class="button alt large">Más información</a></li>
            </ul>
        </footer>
    </section>

<!-- Main -->
    <section id="main">
        <div class="container">
            <div class="row">
                
                <div class="col-12">

                <!-- Blog -->
                    <section>
                        <header class="major">
                            <h2>Principales</h2>
                        </header>
                        <div class="row">
                            <div class="col-6 col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/logo 1.png" style="opacity: 1;" alt="" /></a>
                                    <header>
                                        <h3>Nuestros productos más vendidos</h3>
                                    </header>
                                    <p>¿Quieres conocer nuestro top de productos más vendidos?
                                    Da clcik aqui para conocer lo más vendido en nuestro sitio, pero date prisa que se agotan.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button icon solid fa-file-alt btn-dark">Comenzar</a></li>
                                            <li><a href="#" class="button alt icon solid fa-comment btn-secondary" data-toggle="modal" data-target="#test1">Ver ejemplares</a></li>
                                            <div class="modal" id="test">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Más vendido</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                    <h3><b>Kit's para caballero.</b></h3>
                                                    <img src="https://www.alpel.es/i/u/productos-para-el-afeitado.jpg" width="100%" style="border-radius: 50px;">
                                                    <br>
                                                    <br>
                                                    <h3><b>Loción para caballero.</b></h3>
                                                    <img src="https://www.estiloejecutivocr.com/storage/images/2018/06/04/201806041608160.facebarbero.jpg" width="100%" style="border-radius: 50px">


                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-6 col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/logo 3.png" style="opacity: 1;" alt="" /></a>
                                    <header>
                                        <h3>Próximos productos.</h3>
                                    </header>
                                    <p>En este apartado podras encontrar nuestros proximos productos a incluir en el stock de la tienda, echa un vistazo para poder ser de los primeros en conseguir uno nuevo, no te arrepentiras.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button icon solid fa-file-alt btn-dark">Comenzar</a></li>
                                            <li><a href="#" class="button alt icon solid fa-comment btn-secondary" data-toggle="modal" data-target="#test1">Ver ejemplares</a></li>										
                                            <div class="modal" id="test1">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Proximamente en nuestra pagina.</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                    <h3><b>Crema de afeitar</b></h3>
                                                    <img src="https://monchitime.com/www/wp-content/uploads/2015/02/1805-Sandalwood-Shaving-Soap-in-Wooden-Bowl-Combo-copy.jpg" width="100%" style="border-radius: 50px" style="opacity: 0.5;" class="asd">
                                                    <br>
                                                    <br>
                                                    <h3><b>Para tu cabello</b></h3>
                                                    <img src="https://d20ga1agp72kf9.cloudfront.net/bewe/blog/2018-07-articulos-de-peluqueria-full.jpg" width="100%" style="border-radius: 50px">
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@stop