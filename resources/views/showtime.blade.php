@extends('layouts.app')

@section('title', 'Movie Showtime')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Movie Showtime</h2></div>
                <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Show Name</th>
                            <th>Show Time</th>
                        </tr>
                    </thead>

                    <tbody>

                    @if( count($movies) > 0 )
                        @foreach( $movies as $movie )
                            @if( count($movie) > 0 )
                                @foreach( $movie->showedOn as $show )
                                <tr>
                                    @if( $loop->index == 0)
                                        <td rowspan="{{ count($movie->showedOn) }}">{{ $movie->title }}</td>
                                    @endif
                                    <td>{{ $show->show->title }}</td>
                                    <td>{{ $show->show->time }}</td>
                                </tr>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
