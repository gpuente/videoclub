@extends('layouts.master')

@section('content')
	<div class="row">
		<form action="{{ url('/catalog/create') }}" method="POST">
			<h2>Crear Nueva Película</h2>
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" name="title" id="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="year">Año:</label>
				<input type="text" name="year" id="year" class="form-control">
			</div>

			<div class="form-group">
				<label for="director">Director:</label>
				<input type="text" name="director" id="director" class="form-control">
			</div>

			<div class="form-group">
				<label for="poster">Poster:</label>
				<input type="text" name="poster" id="poster" class="form-control">
			</div>

			<div class="form-group">
				<label for="synopsis">Resumen:</label>
				<textarea name="synopsis" id="synopsis" class="form-control" cols="5" rows="5"></textarea>
			</div>

			<input type="submit" class="btn btn-primary" value="Enviar">
		</form>
	</div>

@endsection
