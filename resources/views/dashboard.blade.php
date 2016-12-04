@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Movies</div>

                <div class="panel-body">
                    @if( count($movies) > 0 )

                    <ul class="list-unstyled">
                        @foreach( $movies as $movie )
                            <li>
                                <a href="{{ route('movies.show', ['movie' => $movie->id]) }}">
                                    <h3 class="title">{{ $movie->title }}</h3>
                                </a>
                                by <span class="director">{{ $movie->director_name }}
                            </li>
                        @endforeach
                    </ul>

                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Shows</div>

                <div class="panel-body">
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
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Halls</div>

                <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
