@extends('layouts.app')

@section('title', 'Edit Hall')


@section('content')
	<h2>Edit Hall: </h2>

	{!! Form::model($hall, ['route' => ['halls.update', $hall->id], 'method' => 'PATCH']) !!}

		
		@include('partials.hall-form')

		
		{!! Form::submit('Update Hall', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop