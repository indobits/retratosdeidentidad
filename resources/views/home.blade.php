
@extends('layout.base')
@section('title', 'Inicio')
@section('descripcion', 'Campaña audiovisual que busca aportar en el proceso de identificación de la población afroperuana')

@section('contenido')
<section class="fondo-inicio">
  <section class="inicio">
         
        </section>
        <section class="name">
         Retratos de Identidad
        </section>

        <section class="slider-principal">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="img/rostros/luisreyes.jpg"></div>
              <div class="swiper-slide"><img src="img/rostros/pierre.jpg"></div>
              <div class="swiper-slide"><img src="img/rostros/andrea.jpg"></div>
              <div class="swiper-slide"><img src="img/rostros/alex.jpg"></div>
              <div class="swiper-slide"><img src="img/rostros/joan.jpg"></div>
            </div>
          </div>
        </section>
        
        <section class="contenido">
          <nav class="home-nav">
            <div class="collapse navbar-collapse" id="navbarNav">
              @include('inc/navbar')
          </div>
          </nav>
        </section> 
</section>
        
        
@endsection    
   
@section('js')


           $(".home-nav").hide();
            $(".slider-principal").hide();
            $(".name").hide();
             $(".inicio").hide();

           setTimeout(function() {
                $(".name").fadeIn(1500);
            },1800);
            
            setTimeout(function() {
                $(".home-nav").fadeIn(1500);
                $(".inicio").fadeIn(1500);
                $(".slider-principal").fadeIn(1500);
            },4000);

            /* 

            $('.home-nav .dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });*/

             var swiper = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		         loop: true,
		         autoplay: 4000,
		         speed: 300,
		         effect: 'fade',
		         fade: {
					  crossFade: false
					}
		    });

@endsection      
     

   

