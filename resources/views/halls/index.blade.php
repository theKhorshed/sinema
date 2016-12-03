@extends('layouts.app')

@section('title', 'Halls')


@section('content')
	<h2>All Halls</h2>

	@if( count($halls) > 0 )

	<ul class="list-unstyled">
		@foreach( $halls as $hall )
			<li>
				<a href="{{ route('halls.show', ['hall' => $hall->id]) }}">
					<h3 class="title">
						{{ $hall->title }}
						<span class="seats">( Seats: {{ $hall->seats }}) </span>
					</h3> 
				</a>
			</li>
		@endforeach
	</ul>

	@endif

	<a href="{{ route('halls.create') }}" class="btn btn-lg btn-default">Add Hall</a>
@stop