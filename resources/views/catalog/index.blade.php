@extends('layouts.master')

@section('content')
	<div class="row">
	
		@foreach($movies as $movie)

			<div class="col-xs-6 col-sm-4 col-md-3 text-center">
				<a href="{{ url('/catalog/show/'.$movie->id) }}">
					<img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
					<h4>{{ $movie->title }}</h4>
				</a>
			</div>
		@endforeach
	</div>
	
@endsection