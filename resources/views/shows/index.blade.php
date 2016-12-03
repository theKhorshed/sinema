@extends('layouts.app')

@section('title', 'Shows')


@section('content')
	<h2>All Shows</h2>

	@if( count($shows) > 0 )

	<ul class="list-unstyled">
		@foreach( $shows as $show )
			<li>
				<a href="{{ route('shows.show', ['show' => $show->id]) }}">
					<h3 class="title">
						{{ $show->title }}
						<span class="seats">( Time: {{ $show->time }}) </span>
					</h3> 
				</a>
			</li>
		@endforeach
	</ul>

	@endif

	<a href="{{ route('shows.create') }}" class="btn btn-lg btn-default">Add Show</a>
@stop