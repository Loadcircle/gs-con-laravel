@extends('layouts.app')
@section('content')
<!-- Inicio del carousel -->
    <span id="inicio"></span> <!-- para remover el menu -->
    <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i=0; ?>
                @foreach ($carousel as $car)                
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i == 0)class="active"@endif></li>
                <?php $i++;?>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <?php $i=0; ?>
                @foreach ($carousel as $car)   
                <div @if($i == 0)class="carousel-item active"@else class="carousel-item" @endif>
                    <img class="d-block w-100" src="{{ asset('').'/'.$car->file }}" alt="Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{$car->tittle}}</h1>
                        <a href="#nosotros"><img src="{{ asset('image/arrow2.svg') }}" alt="flecha abajo"></a>
                    </div>
                </div> 
                <?php $i++;?>
                @endforeach
            </div>
    </div>
<!-- fin del carousel -->

<?php $z=0; ?>
@foreach ($secciones as $sec)
    @if ($sec->section_types_id == 1)
    <?php 
    $content_image = "<span id='$sec->slug'></span>
                    <div class='row container-fluid nosotros'>
                        <div class='col-md-6 flex-nosotros'>
                            <div class='ml '>";
                                foreach($contenido[$z] as $cont)
                                { 
                                  $content_image .= "<h1>$cont->name</h1>
                                    <p>$cont->content</p>";                
                                }
        $content_image .= "</div>    
                        </div>
                    <div class='col-md-6'>";
                        foreach($contenido[$z] as $cont){
                        if(!empty($cont->file)){
                            $content_image .= "<img class='edificio img-fluid' src='".asset('')."/$cont->file' alt='edificio'>";
                            }
                        }
    $content_image .= "</div>
                </div>";               
    echo $content_image; ?>
    @elseif ($sec->section_types_id == 2)
    <?php  
    
$cards = "<span id='$sec->slug'></span>
<div class='servicio'>
    <div class='text-center my-5'>
        <h1>Unidades del negocio</h1>
    </div>             
    <div class='display-grid' style='display: grid; grid-template-columns: auto auto auto;justify-content: center;'> ";  
    foreach($contenido[$z] as $cont){
$cards .="<div class='tarjeta-wrap'>
            <div class='tarjeta'>
                <div class='adelante' style='background: url(".asset('')."/$cont->file);background-size: 100% 100%;background-position: center;'></div>
                <div class='atras' style='background: url(".asset('')."/$cont->file);'>
                    <div class='row' style='position: absolute; bottom: 0; margin: 10px'>
                            $cont->content                                    
                        <div class='col-md-6 col-sm-6 col-6'>
                            <a href='$cont->name' target='_blank'><img width='50px' src='".asset('')."/image/home.svg' alt='icono-home'></a>
                        </div>
                        <div class='col-md-6 col-sm-6 col-6'>
                            <a href='$cont->sub_name' target='_blank'><img width='50px' src='".asset('')."/image/fb.svg' alt='icono-facebook'></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }        
$cards .="</div>";
echo $cards; ?>
    @elseif ($sec->section_types_id == 3)
    <?php
    $parallax = "<span id='$sec->slug'></span>";
                foreach($contenido[$z] as $cont)
                {  if(!empty($cont->file))
                    {
                    $parallax .="<div class='my-5 l-tiempo' style='background: url(".asset('')."/$cont->file);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;'>";
                    } 
                }
                $parallax .="<h1>"; 
                        foreach($contenido[$z] as $cont)
                        { 
                          $parallax .= "$cont->content";                
                        }
        $parallax .="</h1>
                </div>";
      echo $parallax; ?>
    @elseif ($sec->section_types_id == 4)
    <?php  
    $brand = "<span id='$sec->slug'></span>
    <div class='convenio my-5 text-center'>
        <h1>Auspiciadores</h1>
        <div class='display-grid my-5' style='display: grid; grid-template-columns: auto auto auto; justify-items:center; margin: 0 100px;'>";
            foreach($contenido[$z] as $cont){
            $brand .= "<div class='logo-auspicio'>
                            <img src='".asset('')."/$cont->file' alt=''>
                        </div>"; 
            }
                               
    $brand .= "</div>
    </div>";
    echo $brand; ?>    
    @endif
    <?php $z++; ?>
@endforeach

<!-- Contacto -->
<div class="contacto my-5" @if($contacto<1)style="display: none"@endif>
    <span id="contacto"></span>
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
@endsection