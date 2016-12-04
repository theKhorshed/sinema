<table class="table table-hover">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Hall Name</th>
            <th>Show Name</th>
            <th>Show Time</th>
        </tr>
    </thead>

    <tbody>

    @if( count($allShows) > 0 )

        @foreach( $allShows as $show )
            <tr>
                <td> {{ $show->movie ? $show->movie->title : '-- No Movie ! --' }} </td>
                <td> {{ $show->hall->title }} </td>
                <td> {{ $show->show->title }} </td>
                <td> {{ $show->show->time }} </td>
            </tr>
        @endforeach

    @else

        <tr>
            <td colspan="3"><h4>Nothing to show!</h4></td>
        </tr>

    @endif
    
    </tbody>


</table>