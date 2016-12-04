<table class="table table-hover">
    <thead>
        <tr>
            <th>Hall Name</th>
            <th>Seats</th>
            <th>Edit/Delete</th>
        </tr>
    </thead>

    <tbody>

    @if( count($halls) > 0 )

        @foreach( $halls as $hall )
            <tr>
                <td>
                    <a href="{{ route('halls.show', ['hall' => $hall->id]) }}">
                        {{ $hall->title }}
                    </a>
                </td>
                <td>
                    {{ $hall->seats }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('halls.edit', ['hall' => $hall->id]) }}">Edit</a>
                    {!! Form::open(['route' => ['halls.destroy', $hall->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']); !!}


                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    @else

        <tr>
            <td colspan="3"><h4>No hall!</h4></td>
        </tr>

    @endif
    
    </tbody>

</table>

<a class="btn btn-primary" href="{{ route('halls.create') }}"> Add New Hall</a>
