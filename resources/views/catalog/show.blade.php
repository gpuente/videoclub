@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4 text-right align">
			<img src="{{ $pelicula['poster'] }}" alt="{{ $pelicula['title'] }}">
		</div>
		<div class="col-sm-6">
			<h3>{{ $pelicula['title'] }}</h3>
			<h4>Año: {{ $pelicula['year'] }}</h4>
			<h4>Director: {{ $pelicula['director'] }}</h4>

			<p class="text-justify">
				<strong>Resumen: </strong>
				{{ $pelicula['synopsis'] }}
			</p>

			<p>
				<strong>Estado: </strong>
				@if( $pelicula['rented'])
					Película actualmente rentada
				@else
					Película disponible
				@endif
			</p>
			<div class="form-group">
				@if($pelicula['rented'])
					<a href="" class="btn btn-danger">Devolver Película</a>
				@else
					<a href="" class="btn btn-primary">Alquilar Película</a>
				@endif

				<a href="{{ url('catalog/edit/'.$id) }}" class="btn btn-success">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					Editar Película
				</a>

				<a href="{{ url('/') }}" class="btn btn-default">
					<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
					Volver a Listado
				</a>
			</div>
		</div>
	</div>
@endsection