@extends('layouts.app')

@section('title', $movie->title)


@section('content')
	<h2>{{ $movie->title }}</h2>


	<p class="desc">{{ $movie->description }}</p>
	<p> Director: <span class="director">{{ $movie->director_name }} </p>
	
	<h4> Halls: </h4>

	<ul class="list-unstyled">
		@foreach( $movie->showedOn as $showItem )
			<li>{{ $showItem->hall->title }} - {{ $showItem->show->title }} {{ $showItem->show->time }}</li>
		@endforeach
	</ul>

	<a class="btn btn-primary pull-left" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Edit Movie</a>
			
@stop