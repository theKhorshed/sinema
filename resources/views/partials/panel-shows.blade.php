<table class="table table-hover">
    <thead>
        <tr>
            <th>Show Name</th>
            <th>Time</th>
            <th>Edit/Delete</th>
        </tr>
    </thead>

    <tbody>

    @if( count($shows) > 0 )

        @foreach( $shows as $show )
            <tr>
                <td>
                    <a href="{{ route('shows.show', ['show' => $show->id]) }}">
                        {{ $show->title }}
                    </a>
                </td>
                <td>
                    {{ $show->time }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('shows.edit', ['show' => $show->id]) }}">Edit</a>
                    {!! Form::open(['route' => ['shows.destroy', $show->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']); !!}


                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    @else

        <tr>
            <td colspan="3"><h4>No show!</h4></td>
        </tr>

    @endif
    
    </tbody>

</table>

<a class="btn btn-primary" href="{{ route('shows.create') }}">Add New Show</a>