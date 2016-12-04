<table class="table table-hover">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Director</th>
            <th>Edit/Delete</th>
        </tr>
    </thead>

    <tbody>

    @if( count($movies) > 0 )

        @foreach( $movies as $movie )
            <tr>
                <td>
                    <a href="{{ route('movies.show', ['movie' => $movie->id]) }}">
                        {{ $movie->title }}
                    </a>
                </td>
                <td>
                    {{ $movie->director_name }}
                </td>
                <td class="edit-delete">
                    <a class="btn btn-primary" href="{{ route('movies.edit', ['movie' => $movie->id]) }}">Edit</a>

                    {!! Form::open(['route' => ['movies.update', $movie->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']); !!}


                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    @else

        <tr>
            <td colspan="3"><h4>No movie!</h4></td>
        </tr>

    @endif
    
    </tbody>


</table>

<a class="btn btn-primary" href="{{ route('movies.create') }}">Add New Movie</a>