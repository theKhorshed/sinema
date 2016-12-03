@extends('layouts.app')

@section('title', $hall->title)


@section('content')
	<h2>{{ $hall->title }}</h2>


	<p> Total Seats: {{ $hall->seats }} </p>

	<a class="btn btn-primary" href="{{ route('halls.edit', ['hall' => $hall->id]) }}">Edit hall</a>
			
@stop