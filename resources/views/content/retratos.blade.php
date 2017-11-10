
@extends('layout.base')
@section('title', 'Retratos')
@section('descripcion', 'Busca contar a través del cuerpo la historia personal del participante: sus pasiones, sus luchas, sueños y en general cómo vive, lo que significa ser afrodescendiente.')
@section('css')
<link rel="stylesheet" href="{{ asset('css/swiper-galeria.css')}}">
@endsection
@section('contenido')
@include('inc/modal')

<div class="galeria-retratos">
  <a href="{{url('/')}}">Retratos de Identidad</a>
</div>
<div class="redes">
  <ul>
      <li><a href="https://www.facebook.com/retratosdeidentidad" target="_blank"><img src="{{ asset('img/facebookamarillo.svg?1.0') }}" alt=""></a></li>
      <li><a href="https://vimeo.com/user72581821" target="_blank"><img src="{{ asset('img/vimeoamarillo.svg') }}" alt=""></a></li>
      <li><a href="mailto:retratosdeidentidad@gmail.com"><img src="{{ asset('img/emailamarillo.svg') }}" alt=""></a></li>
    </ul>
</div>
<!-- Page Wrap -->
<div class="page-wrap" id="page-content-wrapper">

  <div id="home-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!--Alex-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Alexander Girón Bulnes</h1>
              <p>27 años</p>
              <p>Gay cisgénero</p>
              <p>Administración de Estación del Metro de Lima</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">"Es sentir orgullo de formar parte de una gran familia, llena de identidad, de matices, de arte, de diversidad y sobre todo con tanta riqueza cultural."</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/alexretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Andrea Guadalupe-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Andrea Guadalupe Sanchez Contreras</h1>
              <p>20 años</p>
              <p>Heterosexual Mujer</p>
              <p>Estudiante de Ciencias de la comunicación / Activista Afrofeminista</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">"Es reconocer y valorar nuestra herencia cultural, estando orgullosas/os de nuestros antepasados africanos que resistieron y lucharon por justicia y libertad."</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/andrearetrato__.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>

        <!--Aylin -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Aylin Anamar Alguedas García</h1>
              <p>25 años</p>
              <p>Heterosexual Mujer</p>
              <p>Secretaria</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/aylinretrato_.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
       
       
        <!--Carlos -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Carlos Larrea Salazar </h1>
              <p>22 años</p>
              <p>Heterosexual Hombre</p>
              <p>Clown/ Estudiante de Pedagogía Teatral </p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es formar parte de un grupo humano que tiene un legado universal, el cual debe ser reconocido y valorado por todos los seres humanos</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/carlosretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
      
        <!--Exon -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Exon Otero Rojas</h1>
              <p></p>
              <p>Heterosexual Hombre</p>
              <p></p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/exon.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Fernando -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Mario Fernando Morales Gutierrez</h1>
              <p>23 años</p>
              <p>Ingeniero Electrónico</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es sentirme parte de una historia y estar orgulloso de ella. Es estar consciente de la situación desfavorable en la que nos encontramos y sentirme responsable de hacer algo al respecto.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/fernandoretratocurvas.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
      
        <!--jazzmin -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Stephanie Yasmin Paredes Castro</h1>
              <p>22 años</p>
              <p>Estudiante Sociología</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/yazminretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--jazzrostro -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Ana Jazmin Reyes Paredes</h1>
              <p>26 años</p>
              <p>Heterosexual Mujer</p>
              <p>Psicóloga / Activista Afrofeminista / Poeta</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Ser una mujer afrodescendiente, para mí significa pura reivindicación y fortalecimiento de mi identidad afroperuana desde el alma, con lucha, resistencia y resiliencia. Es memoria, es amor, es historia. Es luchar por mis padres, por mis abuelos/as, por mis bisabuelos/as, por mis ancestros y ancestras. Ser mujer afrodescendiente es mi pasado, es mi presente y afortunadamente será mi futuro.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/jazzretrato_.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--jesusrogelia -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Jesús Rogelia Contreras Coronado</h1>
              <p>50 años</p>
              <p>Heterosexual Mujer</p>
              <p>Ama de casa/ Estudiante de Computación</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Estoy orgullosa de mi etnicidad, considero que si tuviese oportunidad, volvería a ser una mujer afroperuana. Ser afroperuana es una lucha permanente para que lxs demás entiendan que somos diferentes pero iguales en derechos y oportunidades. Me siento feliz por las muchas cualidades que nos dieron lxs ancestrxs y que hoy en día nos siguen sirviendo para la vida.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/andreayrogeliaretrato_.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--joan -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Joan Reyes Alarcón</h1>
              <p>25 años</p>
              <p>Heterosexual Hombre</p>
              <p>Estudiante de Bellas Artes</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es la reivindicación de nuestras raíces ancestrales africanas. Identificarse como afroperuano es abrazar nuestro legado.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/joanretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>

        <!--nilton -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Nilton Denis Dávila Castro</h1>
              <p>Heterosexual</p>
              <p>Vendedor</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Para mí ser afroperuano es estar orgulloso de lo que soy, de la familia que tengo y su historia. Del trabajo que han realizado y el éxito que hemos logrado gracias a ello.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/nilton.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--orlando -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Orlando Sosa Lozada</h1>
              <p>25 años</p>
              <p>Gay Cisgénero</p>
              <p>Economista – Activista Gay / Afroperuano</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es reconocerme heredero del legado ancestral de un pueblo siendo arrancado de la madre África en condiciones infrahumanas, sobrevivió gracias a su lucha y resistencia. Es sentirme orgulloso de las ancestras y ancestros que pusieron sus cuerpos y sus vidas por allanar nuestro camino y que ofrecieron aportes invaluables para el desarrollo, gracias a los cuales podemos vivir en mejores condiciones de vida. Es asumir el compromiso dedicarle mi vida a la lucha por el desarrollo de mis hermanas/os afrodescendientes para que las siguientes generaciones encuentren un mundo más equitativo.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/orlando.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>

        <!--orlando -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Mónica Mirós</h1>
              <p>Muralista</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/retratos/miros.jpg?1.1')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        
        

      </div>
      
      
    </div>
  </div>

</div>
@endsection

@section('js')


var mySwiper = new Swiper(".swiper-container", {
  direction: "vertical",
  loop: true,
  pagination: ".swiper-pagination",
  grabCursor: true,
  paginationClickable: true,
  parallax: true,
  autoplay: false,
  effect: "slide",
  mousewheelControl: 1,
    keyboardControl: true,
});

$('#instrucciones').modal('show');



@endsection
