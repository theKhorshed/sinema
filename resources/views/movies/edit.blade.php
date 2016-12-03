@extends('layouts.app')

@section('title', 'Edit Movie')


@section('content')
	<h2>Edit Movie: </h2>

	{!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'method' => 'PUT']) !!}

		
		@include('partials.movie-form')

		
		{!! Form::submit('Update Movie', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop