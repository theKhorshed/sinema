@extends('layouts.app')

@section('title', 'Add Halls')


@section('content')
	<h2>Add new Hall </h2>

	{!! Form::open(['route' => 'halls.store']) !!}

		
		@include('partials.hall-form')

		
		{!! Form::submit('Add Hall', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop