@extends('layouts.app')

@section('title', $show->title)


@section('content')
	<h2>{{ $show->title }}</h2>


	<p>Show Time: {{ $show->time }} </p>

	<a class="btn btn-primary" href="{{ route('shows.edit', ['show' => $show->id]) }}">Edit show</a>
			
@stop