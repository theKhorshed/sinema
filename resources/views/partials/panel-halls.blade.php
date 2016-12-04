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
                    <a class="btn btn-danger" href="{{ route('halls.destroy', ['hall' => $hall->id]) }}">Delete</a>
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
