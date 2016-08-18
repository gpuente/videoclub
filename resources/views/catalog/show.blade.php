@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4 text-right align">
			<img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
		</div>
		<div class="col-sm-6">
			<h3>{{ $movie->title }}</h3>
			<h4>Año: {{ $movie->year }}</h4>
			<h4>Director: {{ $movie->director }}</h4>

			<p class="text-justify">
				<strong>Resumen: </strong>
				{{ $movie->synopsis }}
			</p>

			<p>
				<strong>Estado: </strong>
				@if($movie->rented)
					Película actualmente rentada
				@else
					Película disponible
				@endif
			</p>
			<div class="form-group">
				@if($movie->rented)
					<a href="" class="btn btn-danger">Devolver Película</a>
				@else
					<a href="" class="btn btn-primary">Alquilar Película</a>
				@endif

				<a href="{{ url('catalog/edit/'.$movie->id) }}" class="btn btn-success">
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