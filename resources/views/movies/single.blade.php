@extends('layouts.app')

@section('title', $movie->title)


@section('content')
	<h2>{{ $movie->title }}</h2>


	<p class="desc">{{ $movie->description }}</p>
	<p> Director: <span class="director">{{ $movie->director_name }} </p>

	<a class="btn btn-primary" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Edit Movie</a>
			
@stop