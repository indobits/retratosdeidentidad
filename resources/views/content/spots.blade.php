
@extends('layout.base')

@section('title', 'Spots')
@section('descripcion', 'Video informativo sobre como el participante se identifica y por qué es importante el censo 2017')

@section('contenido')

@include('inc/header')
<main>
	
	<section class="cuerpo-full">
		<h1>Spots</h1>
		<p>Video informativo sobre como el participante se identifica y por qué es importante el censo 2017</p>
		
		<h2>David Garcia</h2>
		<video controls>
		  <source src="{{asset('video/davidgarcia.mp4')}}" type="video/mp4">
		</video>

		<h2>Medaline Palma</h2>
		<video controls>
		  <source src="{{asset('video/medaline.mp4')}}" type="video/mp4">
		</video>

		<h2>Flor Alva Pflucker</h2>
		<video controls>
		  <source src="{{asset('video/flor.mp4')}}" type="video/mp4">
		</video>
		
		
	</section>
</main>


@endsection
