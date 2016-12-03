@extends('layouts.app')

@section('title', 'Movies')


@section('content')
	<h2>All Movies</h2>

	@if( count($movies) > 0 )

	<ul class="list-unstyled">
		@foreach( $movies as $movie )
			<li>
				<a href="{{ route('movies.show', ['movie' => $movie->id]) }}">
					<h3 class="title">{{ $movie->title }}</h3>
				</a>
				<p class="desc">{{ $movie->description }}</p>
				by <span class="director">{{ $movie->director_name }}
			</li>
		@endforeach
	</ul>

	@endif

	<a href="{{ route('movies.create') }}" class="btn btn-lg btn-default">Add Movie</a>
@stop