@extends('layouts.app')

@section('content')
<!-- Inicio del carousel -->
<span id="inicio"></span> <!-- para remover el menu -->
<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('image/banner1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Un holding de <br>marcas Peruanas</h1>
                <a href="#nosotros"><img src="{{ asset('image/arrow2.svg') }}" alt="flecha abajo"></a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/banner2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Un holding de <br>marcas Peruanas</h1>
                <a href="#nosotros"><img src="{{ asset('image/arrow2.svg') }}" alt="flecha abajo"></a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/banner3.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Un holding de <br>marcas Peruanas</h1>
                <a href="#nosotros"><img src="{{ asset('image/arrow2.svg') }}" alt="flecha abajo"></a>
              </div>
          </div> 
        </div>
</div>
<!-- fin del carousel -->

<!-- Seccion de nosotros -->
<span id="nosotros"></span>
<div class="row container-fluid nosotros">
    <div class="col-md-6 flex-nosotros">
        <div class="ml ">
            <h1>Misión:</h1>
            <p>Construir un país con empresas más eficientes en su gestión y comercialización a través de la generación de valor que aporta nuestro equipo con experiencia e innovación.</p>
            <h1>Visión</h1>
            <p>En cinco años ser la principal compañía de generación de transformación en empresas y personas a nivel nacional.</p>
        </div>       
    </div>
    <div class="col-md-6">
        <img class="edificio img-fluid" src="{{ asset('image/edificio.png') }}" alt="edificio">
    </div>
</div>
<!-- Seccion de nosotros -->

<!-- Servicios -->
<span id="servicio"></span>
<div class="servicio">
    <div class="text-center my-5">
        <h1>Unidades del negocio</h1>
    </div>      

    <div class="display-flex marca-1">       
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante marca-1"></div>
                <div class="atras">
                    <div class="row" style="margin-top: 220px;">
                        <div class="col-md-6 col-sm-6 col-6">
                            <a href="http://happyfactory.pe" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <a href="https://www.facebook.com/HappyFactory.pe/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante marca-1"></div>
                <div class="atras">
                    <div class="row" style="margin-top: 220px;">
                        <div class="col-md-6 col-sm-6 col-6">
                            <a href="https://clubfranquicia.com" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <a href="https://www.facebook.com/FranquiciaClub/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tarjeta-wrap">
            <div class="tarjeta">
                <div class="adelante marca-1"></div>
                <div class="atras">                            <div class="row" style="margin-top: 220px;">
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="https://agcproducciones.com" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <a href="https://www.facebook.com/AGC-Producciones-161667073894696/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                    </div>
                </div></div>
            </div>
        </div>
    </div>
    <div class="display-flex marca-2">       
            <div class="tarjeta-wrap">
                <div class="tarjeta">
                    <div class="adelante marca-1"></div>
                    <div class="atras">
                        <div class="row" style="margin-top: 220px;">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="http://pmktconsulting.com" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="https://www.facebook.com/pmktconsulting/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tarjeta-wrap">
                <div class="tarjeta">
                    <div class="adelante marca-1"></div>
                    <div class="atras">
                        <div class="row" style="margin-top: 220px;">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="http://www.miboda.com.pe" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="www.facebook.com/miboda.com.pe/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tarjeta-wrap">
                <div class="tarjeta">
                    <div class="adelante marca-1"></div>
                    <div class="atras">
                        <div class="row" style="margin-top: 220px;">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="http://feriafranquiciasperu.com" target="_blank"><img width="50px" src="{{ asset('image/home.svg') }}" alt="icono-home"></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="https://www.facebook.com/fifperu/" target="_blank"><img width="50px" src="{{ asset('image/fb.svg') }}" alt="icono-facebook"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Servicios -->

<!-- Linea de tiempo -->
<span id="historia"></span>
<div class="my-5 l-tiempo">                
</div>
<!-- Linea de tiempo -->

<!-- Convenios -->
<span id="convenio"></span>
<div class="convenio my-5 text-center">
    <h1>Auspiciadores</h1>
    <div class="display-flex my-5">
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/consorcio_ferial_peru.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/cesar_vallejo.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/up.png') }}" alt="">
            </div>
    </div>
    <div class="display-flex my-5">
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/franquicias_arg.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/finanzas_estructuradas.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/grupo_americano_franquicias.png') }}" alt="">
            </div>
    </div>
    <div class="display-flex my-5">
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/consorcio_ferial_peru.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/cesar_vallejo.png') }}" alt="">
            </div>
            <div class="logo-auspicio">
                <img src="{{ asset('image/auspicios/up.png') }}" alt="">
            </div>
    </div>
</div>
<!-- Convenios -->

<!-- Contacto -->
<span id="contacto"></span>
<div class="contacto my-5">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12 my-5">
            <img class="img-fluid" src="{{ asset('image/contacto.jpg') }}" alt="contacto">
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <h1>Contáctanos</h1>            
            {!! Form::open(['route' => 'enviar','name' => 'contacto', 'method' => 'POST']) !!}
            
                @include('forms.form')

            {!! Form::close() !!}
            <div id="alert" ></div>
        </div>
    </div>
</div>
<!-- Contacto -->
<div class="alerta" id="alerta"></div>
<!-- empresario de footer -->
<img class="empresario" src="{{ asset('image/alexis.png') }}" alt="empresario">  

<!-- Barra inferior de colores -->
<div class="bot-colores" id="bot">
    <div class="col-colores"></div>
    <div class="col-colores"></div>
    <div class="col-colores"></div>
    <div class="col-colores"></div>
    <div class="col-colores"></div>
</div>
<!-- fin barra colores -->

@endsection