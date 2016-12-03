@extends('layouts.app')

@section('title', 'Edit Show')


@section('content')
	<h2>Edit Show: </h2>

	{!! Form::model($show, ['route' => ['shows.update', $show->id], 'method' => 'PATCH']) !!}

		
		@include('partials.show-form')

		
		{!! Form::submit('Update Show', ['class' => 'btn btn-primary']); !!}


	{!! Form::close() !!}
@stop