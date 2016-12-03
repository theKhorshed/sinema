@extends('layouts.app')

@section('title', 'Add Shows')


@section('content')
	<h2>Add new Hall </h2>

	{!! Form::open(['route' => 'shows.store']) !!}

		
		@include('partials.show-form')

		
		{!! Form::submit('Add Hall', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop