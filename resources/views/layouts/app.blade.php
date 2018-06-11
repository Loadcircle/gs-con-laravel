<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garro Stucchi</title>
    <link rel="icon" href="{{ asset('image/favicon.jpg') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/waypoints/lib/noframework.waypoints.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Menu vertical -->
    <div class="menu-vertical">
        <ul>
            <li><a href="#contacto">Contacto    <img class="imagen-vertical contacto-active" src="{{ asset('image/arrow.svg') }}" alt=""></a></li>
            <li><a href="#convenio">Convenios   <img class="imagen-vertical convenio-active" src="{{ asset('image/arrow.svg') }}" alt=""></a></li>
            <li><a href="#historia">Historia    <img class="imagen-vertical historia-active" src="{{ asset('image/arrow.svg') }}" alt=""></a></li>
            <li><a href="#servicio">Marcas      <img class="imagen-vertical servicio-active" src="{{ asset('image/arrow.svg') }}" alt=""></a></li>
            <li><a href="#nosotros">Nosotros    <img class="imagen-vertical nosotros-active" src="{{ asset('image/arrow.svg') }}" alt=""></a></li>
        </ul>
    </div>
    <!-- Menu vertical -->

    <!-- flecha arriba -->
    <div class="flecha-arriba">
        <a href="#top"><img src="{{ asset('image/up-arrow.svg') }}" alt=""></a> 
    </div>
    <!-- flecha arriba -->

    <!-- wrap -->
    <div class="wrap"> 

        <!-- Barra superior de colores -->
        <div class="top-colores" id="top">
            <div class="col-colores"></div>
            <div class="col-colores"></div>
            <div class="col-colores"></div>
            <div class="col-colores"></div>
            <div class="col-colores"></div>
        </div>
        <!-- fin barra colores -->

        <!-- inicio del nav superior -->
        <nav id="menu" class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('image/logo1.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#servicio">Marcas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#historia">Historia</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#convenio">Convenios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin del nav superior -->

    @yield('content')

    <footer class="footer py-3">
            <div class="row my-5">
                <div class="col-md-4 text-center">
                    <img src="image/logo2.png" alt="">
                </div>
                <div class="col-md-4">
                    <h1>Sigue navegando</h1>
                    <ul>
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#servicio">Unidades de negocio</a></li>
                        <li><a href="#historia">Nuestra historia</a></li>
                        <li><a href="#convenio">Convenios</a></li>
                        <li><a href="#contacto">Contáctanos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h1>Te puede interesar</h1>
                    <ul>
                        <li><a href="http://pmktconsulting.com">www.pmktconsulting.com</a></li>
                        <li><a href="https://clubfranquicia.com">www.clubfranquicia.com</a></li>
                        <li><a href="http://happyfactory.pe">www.happyfactory.pe</a></li>
                        <li><a href="http://www.miboda.com.pe">www.miboda.com.pe</a></li>
                        <li><a href="http://feriafranquiciasperu.com">www.feriafranquicias.com</a></li>
                        <li><a href="https://agcproducciones.com">www.agcproducciones.com</a></li>
                    </ul>
                </div>
            </div>
            <h5 class="text-center">2018 Copyright: <a href="http://garrostucchi.com/">garrostucchi.com</a></h5>
    </footer>

</div> 
<!-- fin del wrap -->

    <script src="{{ asset('js/funciones.js') }}"></script>
    <!-- Plantilla desarrollada por: Jesús Milano y María Pía de Jesús -->
</body>
</html>