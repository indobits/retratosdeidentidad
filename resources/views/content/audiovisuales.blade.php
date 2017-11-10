
@extends('layout.base')

@section('title', 'Audiovisuales')

@section('contenido')

@include('inc/header')
<main>
	
	<section class="cuerpo-full">
		<h1>Audiovisuales</h1>
	
		<h2>Spots</h2>
		<p>video informativo sobre como el participante se identifica y por qué es importante el censo 2017</p>
		<a class="boton" href="{{ url('spots')}}">Ir a Spots</a>

		<hr>

		<h2>Documentales</h2>
		<p>Relatos audiovisuales autobiográficos sobre el proceso de identificación de diversxs afroperuanxs.</p>

		<a class="boton" href="{{ url('documentales')}}">Ir a Documentales</a>

		
	</section>
</main>


@endsection
