
@extends('layout.base')
@section('title', 'Rostros')
@section('descripcion', 'Registro fotográfico que resume la diversidad fenotípica de nuestrxs hermanxs afroperuanxs.')
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
      <li><a href="https://vimeo.com/user72581821" target="_blank"><img src="{{ asset('img/vimeoamarillo.svg?1.1?1.1') }}" alt=""></a></li>
      <li><a href="mailto:retratosdeidentidad@gmail.com"><img src="{{ asset('img/emailamarillo.svg') }}" alt=""></a></li>
    </ul>
</div>
<!-- Page Wrap -->
<div class="page-wrap">

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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/alex.jpg')}});">
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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/andrea.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>

        <!--Andrea Aurora-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Andrea Aurora Bonzano Flores</h1>
              <p>27 años</p>
              <p>Heterosexual Mujer</p>
              <p>Técnica en Enfermería</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">"Es estar identificada con mi pasado a través de mi sangre, mi cultura, mis costumbres y mi familia."</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/andrea-aurora-copia.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Angelina -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Angelina Miladi Yañez</h1>
              <p>26 años</p>
              <p>Bailarina Independiente</p>
              
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/angelina.jpg?1.3')}});">
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
             
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/aylin.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Betzabeth -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Betzabeth Karem Dávila Castro</h1>
              <p>39 años</p>
              <p>Heterosexual Mujer</p>
              <p>Vendedora</p>
             
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/betzabeth.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Brigida -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Brigida Aurora Flores Fuentes</h1>
              <p>49 años</p>
              <p>Heterosexual Mujer</p>
              <p>Negociante</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es ser consciente de que en mi ser corre sangre africana y estoy orgullosa de eso</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/brigida.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Carlos -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Carlos Larrea Salazar</h1>
              <p>22 años</p>
              <p>Heterosexual</p>
              <p>Clown / Estudiante de Pedagogía Teatral</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es formar parte de un grupo humano que tiene un legado universal, el cual debe ser reconocido y valorado por todos los seres humanos</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/carlos.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Celia -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Socorro Celia Grados Santibañez</h1>
              <p>Profesora de Ciencias Sociales</p>
             
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/celiaretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Christian -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Christopher John Cordero Cossio</h1>
              <p>23 años</p>
              <p>Ingeniero Industrial</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/christian.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--David -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>David Esteban García Fuentes</h1>
              <p>31 años</p>
              <p>Heterosexual</p>
              <p>Diseñador y facilitador de Experiencias de Aprendizaje</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es llevar con amor, respeto y responsabilidad mi ancestralidad africana y ponerla en valor con lo que me brinda el haber nacido en esta hermosa tierra llamada Perú.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/david-garcia.jpg')}});">
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
              <p>Asistente Administrativo</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/exonretrato.jpg')}});">
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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/fernando.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Fabrizio -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Fabrizio Bullón</h1>
              <p>19 años</p>
              <p>fotógrafo / Estudiante de Publicidad</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">
                Ser afroperuano mi significa herencia, ancestros, pasión, cultura, familia, fortaleza, resistencia, lucha social permanente y constante. Siento que tengo la responsabilidad de seguir la lucha que empezaron  mis antepasados para  ser escuchados  y respetados ante la sociedad . Ser afroperuano significa felicidad, esencia, gozo, dicha, celebración, raíces. Ser afroperuano es saber que dentro tuyo hay mucho y que eso complementa tu felicidad. Es algo inexplicable, pero que todos los afros sabemos que es.
              </p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/franchesco.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--jade -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Jade Valezka Lopez</h1>
              <p>Estudiante</p>
              <p></p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/jade.jpg')}});">
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
              <p class="testimonio">Ser Afroperuana es estar orgullosa de mis raíces, del color que llevo, de los rasgos que representa la afrodescendencia. Somos herencia de un pueblo luchador y fuerte, historia, cultura y tradición que forma parte de nuestra identidad, todo esto en suma hace diverso a nuestro querido Perú.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/jazmine.jpg')}});">
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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/jazzrostro.jpg')}});">
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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/jesusrogelia.jpg')}});">
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
              <p>Heterosexual</p>
              <p>Estudiante de Bellas Artes</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es la reivindicación de nuestras raíces ancestrales africanas. Identificarse como afroperuano es abrazar nuestro legado.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/joan.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--joel -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Joel Guzmán La Rosa</h1>
              <p>24 años</p>
              <p>Heterosexual</p>
              <p>Trabajo de oficina</p>
              
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/joel.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--joshua -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Joshua</h1>
              <p></p>
              <p></p>
              <p></p>
              
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/joshua.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--katty -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Katty Moriette Lecca Trujillo</h1>
              <p>13 años</p>
              <p>Estudiante</p>
              
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/katty.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--lena -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Lenna Swayne Obregón</h1>
              <p>35 años</p>
              <p>Practicante de marketing y estudiante de música</p>
               <p>Ser Afroperuana es...</p>
               <p class="testimonio">
                 Ser afroperuana para mí, significa llevar en mi sangre la fuerza, el sabor, la alegría, el color, la humildad y la nobleza de un hermosa y milenaria cultura.
               </p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/lena.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--lisset-clava -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Lisette Trujillo Calva</h1>
              <p>Ama de casa</p>
              <p></p>
              
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/lisset-calva.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--luis -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Luis</h1>
              <p></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/luis.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--luisreyes -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Luis Reyes</h1>
              <p>25 años</p>
              <p>Heterosexual</p>
              <p>Antropólogo</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/luisreyes.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--marco -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Marco Antonio Morocho Surita</h1>
              <p>Heterosexual</p>
              <p>Ingeniero Ambiental</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/marco.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--mariapia -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>María Pía Cáceres Cartagena</h1>
              <p>27 años</p>
              <p>Heterosexual</p>
              <p>Bióloga</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/mariapia.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--medaline -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Medaline Palma Villa</h1>
              <p>18 años</p>
              <p>Heterosexual</p>
              <p>Estudiante de Derecho y Ciencias Políticas</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Ser afroperuana es empoderarme, indica que desde tiempos remotos nuestros ancestros africanos quienes lucharon por la construcción de esta sociedad peruana. Es reinvindicarme y afirmar que tengo tanto de africano como de peruano. Entonces soy una afroperuana.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/medaline.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--miguel-esteban-garcia- -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Miguel Esteban García Heredia </h1>
              <p>68 años</p>
              <p>Heterosexual</p>
              <p>Pintor</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Saber que tengo raíces provenientes de África, que las he heredado de mis padres genéticamente y las abrigo en mí mismo con amor. Es más que un color de piel, es la sangre que corre por mis venas.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/miguel-esteban-garcia_.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--mirella-cecilia-copia -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Mirella Cecilia Alguedas García</h1>
              <p>23 años</p>
              <p>Heterosexual</p>
              <p>Promotora de Ventas </p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/mirella-cecilia-copia.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--nilton -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Nilton Denis Dávila Castro </h1>
              <p>Heterosexual</p>
              <p>Vendedor</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Para mí ser afroperuano es estar orgulloso de lo que soy, de la familia que tengo y su historia. Del trabajo que han realizado y el éxito que hemos logrado gracias a ello.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/nilton.jpg')}});">
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
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/orlando.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--pamela -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Pamela Barrera</h1>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Ser afroperuana para mí es reconocer la herencia de la cultura africana y la mezcla de ella con la cultura peruana. Es estar orgullosa de mis raíces y amarme entera y completa. Mi proceso de autoidentificación comenzó desde pequeña en casa, con la ayuda de mis papás, pero me ayudó bastante haber estudiado en una HBCU (Historically Black College and University) Florida A&M University. Gracias a mi alma mater pude poner en palabras e identificar el sutil racismo que aún ocurre en mi país.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/pamela.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--pierre -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Pierre Córdova Dávila</h1>
              <p>33 años</p>
              <p>Gay Cisgénero</p>
              <p>Psicólogo / Psicoterapeuta / Activista Afroperuano</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es reunir en mí la fuerza y la nobleza de los/as ancestros/as que les permitió resistir y transmitirnos su sabiduría como un testimonio imborrable de lucha y compromiso por preservar la identificación y el amor a toda esa cultura que existió previo a la invasión y esclavitud. Es mirar en cada parte de la historia del Perú el aporte incansable por parte de mi pueblo en la construcción de esta nación, aporte que mezquinamente ha sido extirpado de los libros y que hoy debemos visibilizar. Es trabajar arduamente para que las nuevas generaciones entiendan y asuman su identidad afroperuana con orgullo y que en las escuelas o en las calles sepan hacer prevalecer sus derechos ante cualquier forma de violencia intente vulnerabilizarlos.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/pierre.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--pilar -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>María del Pilar Cáceres Cartagena</h1>
              <p>21 años</p>
              <p>Heterosexual</p>
              <p>Estudiante de Sociología</p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio"></p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/pilar.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--sandra -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Sandra Vanessa Menendez Salgado</h1>
              <p>23 años</p>
              <p>Deportista (Karate)</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/sandra.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--sharumretrato -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Sharun Gonzales</h1>
              <p>Comunicadora / Activista</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/sharumretrato.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--yanira -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Yanira Elizabeth Valdez Tejada</h1>
              <p>23 años</p>
              <p></p>
              <p></p>
               <p>Ser Afroperuano es...</p>
              <p class="testimonio">Es abrazar mis raíces, reconocer a mis ancestros y ancestras, tomando consciencia de cómo su historia influye en mi presente y forma parte importante de lo que soy.</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/yanira.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--sara chiarella -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Sara Chiarella Montoya</h1>
              <p>23 años</p>
              <p>Odontóloga</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Para mí ser AfroPeruana y afrodescendiente significa llevar en la sangre la lucha constante de mis antepasados por la libertad. Esa libertad que nos fue negada por nos tener el fenotipo de las personas europeas aquellas que manejaron por siglos los países latinoamericanos.</p>
             
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/sara.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--cecibell -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Cecibell Muñoz Ramirez</h1>
              <p></p>
              <p>Profesora</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/cecibell.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--amiga de fer -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Andrea Verónica Suárez Ramos</h1>
              <p>23 años</p>
              <p>Estudiante de Ingeniería Industrial</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/amigafer.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
       <!--carlos davila -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Carlos Dávila Rojas</h1>
              <p>47 años</p>
              <p>Mayordomo</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/carlosdavila.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--fatima -->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Fátima Adriana Bonilla</h1>
              <p>40 años</p>
              <p>Ama de Casa</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/fatima.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--fernando davila-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Fernando Dávila</h1>
              <p>33 años</p>
              <p>Seguridad / Taxista</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/fernandodavila.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Jose Luis-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>José Luis Villa León</h1>
              <p>20 años</p>
              <p>Químico farmacéutico</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/joselito.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Luis Santiago-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Luis Santiago Palma Reyes</h1>
              <p>20 años</p>
              <p>Químico farmacéutico</p>
              <p>Ser Afroperuano es...</p>
              <p class="testimonio">Eso pasó ya hace unos años. De lo más tranquilo caminaba por la calle muy transitada cuando a lo lejos diviso y patrullero y normal seguía mi camino y cuando me vieron a mí como toda absurda idolatría que los afros siempre estaremos metido en esas cosas malas de la nada me pidieron mis papeles de documentación... y yo como en shock... con qué derecho me piden obligadamente que le muestre mi documentacion y por ser de tez morena querían llevarme a la comisaría. Solo porque yo impuse mis derechos. Era que me pedían mis documentos por ser "negro".</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/luispalma.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Marco Antonio Davila-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Marco Antonio Dávila Robles</h1>
              <p>41 años</p>
              <p>Conductor de trailer</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/marcoantoniodavila.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Mercedes Rivas-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Mercedes María Rivas Joya</h1>
              <p>40 años</p>
              <p>Licenciada en enfermería</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/mercedesrivas.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Pedro Pablo-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Pedro Pablo Dávila</h1>
              <p>68 años</p>
              <p></p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/pedropablo.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Rosa María Rivas-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Rosa María Rivas Joya</h1>
              <p>40 años</p>
              <p></p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/rosamariarivas.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Rufina-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Rufina Robles Bonifacio</h1>
              <p>65 años</p>
              <p>Ama de Casa</p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/rufina.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--victor davila-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Víctor Dávila Morán</h1>
              <p>71 años</p>
              <p>Conductor de camión</p>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/victor.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--gilder-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Gilder Giampaul Cuenca Palma</h1>
            
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/gilder.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--jampier-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Jampier Panta Cotito</h1>
               
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/jampier.jpg')}});">
              <p class="paragraph">
                
              </p>
            </div>
          </div>
        </div>
        <!--Mónica Mirós-->
        <div class="swiper-slide ">
          <div class="swiper-image swiper-left" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left ">
              <h1>Mónica Mirós</h1>
              <p>Muralista</p>
            </div>
          </div>
          <div class="swiper-image swiper-right" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right" style="background-image: url({{asset('img/rostros/monica.jpg')}});">
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

$('#instrucciones').modal('show')

@endsection