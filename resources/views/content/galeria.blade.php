
@extends('layout.base')

@section('title', 'Sobre el Proyecto')

@section('contenido')

@include('inc/header')
<main>
	<section class="bloque-img proyecto">
		
	</section>
	<section class="cuerpo">
		<h1>Galería</h1>

		<h2>Rostros</h2>
		<p>Registro fotográfico que resume la diversidad fenotípica de nuestrxs hermanxs afroperuanxs.</p>
		<a class="boton" href="{{ url('rostros')}}">Ir a Rostros</a>

		<h2>Retratos</h2>
		<p>Busca contar a través del cuerpo la historia personal del participante: sus pasiones, sus luchas, sueños y en general cómo vive, lo que significa ser afrodescendiente.</p>
		<a class="boton" href="{{ url('retratos')}}">Ir a Retratos</a>
		<h2>Postales</h2>

		<a class="boton" href="{{ url('postales')}}">Ir a Postales</a>
		
	</section>
</main>


@endsection
