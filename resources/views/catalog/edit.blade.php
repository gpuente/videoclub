@extends('layouts.master')

@section('content')
	<div class="row">

		<form action="{{ url('catalog/edit/'.$movie->id) }}" method="POST">
			<h2>Modificar película: {{ $movie->id }}</h2>
			{{ method_field('PUT') }}
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}">
			</div>

			<div class="form-group">
				<label for="year">Año:</label>
				<input type="text" name="year" id="year" class="form-control" value="{{ $movie->year }}">
			</div>

			<div class="form-group">
				<label for="director">Director:</label>
				<input type="text" name="director" id="director" class="form-control" value="{{ $movie->director }}">
			</div>

			<div class="form-group">
				<label for="poster">Poster:</label>
				<input type="text" name="poster" id="poster" class="form-control" value="{{ $movie->poster }}">
			</div>

			<div class="form-group">
				<label for="synopsis">Resumen:</label>
				<textarea name="synopsis" id="synopsis" class="form-control" cols="5" rows="5">{{ $movie->synopsis }}</textarea>
			</div>

			<input type="submit" class="btn btn-primary" value="Modificar Pelicula">
		</form>
	</div>
@endsection
