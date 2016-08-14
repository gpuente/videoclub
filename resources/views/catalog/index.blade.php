@extends('layouts.master')

@section('content')
	<div class="row">
	
		@foreach($arrayPeliculas as $key => $pelicula)
			<div class="col-xs-6 col-sm-4 col-md-3 text-center">
				<a href="{{ url('/catalog/show/'.$key) }}">
					<img src="{{ $pelicula['poster'] }}" alt="{{ $pelicula['title'] }}">
					<h4>{{ $pelicula['title'] }}</h4>
				</a>
			</div>
		@endforeach
	</div>
	
@endsection