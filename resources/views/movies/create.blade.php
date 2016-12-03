@extends('layouts.app')

@section('title', 'Add Movie')


@section('content')
	<h2>Add new Movie: </h2>

	{!! Form::open(['route' => 'movies.store']) !!}

		
		@include('partials.movie-form')

		
		{!! Form::submit('Add Movie', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop