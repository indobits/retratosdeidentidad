
@extends('layout.base')
@section('contenido')
@include('inc/modal')
<div class="galeria-retratos">
  <a href="{{url('/')}}">Retratos de Identidad</a>
</div>
<div class="redes">
  <ul>
      <li><a href="https://www.facebook.com/retratosdeidentidad" target="_blank"><img src="{{ asset('img/facebookamarillo.svg?1.0') }}" alt=""></a></li>
      <li><a href="https://vimeo.com/user72581821" target="_blank"><img src="{{ asset('img/vimeoamarillo.svg?1.1') }}" alt=""></a></li>
      <li><a href="mailto:retratosdeidentidad@gmail.com"><img src="{{ asset('img/emailamarillo.svg') }}" alt=""></a></li>
    </ul>
</div>
<div class="slider-postales">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{asset('img/otros/caballitos.jpg')}}" alt=""></div>
      <div class="swiper-slide"><img src="{{asset('img/otros/pericomanita.jpg')}}" alt=""></div>
    </div>
  </div>
</div>
  

@endsection

@section('js')

var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        effect: "slide",
  mousewheelControl: 1,
    keyboardControl: true,
    });
    $('#instrucciones').modal('show')
@endsection
