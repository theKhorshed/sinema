<table class="table table-hover">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Director</th>
            <th>Hall</th>
            <th>Show</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>

    @if( count($bookings) > 0 )

        @foreach( $bookings as $booking )
            <tr>
                <td>
                    {{ $booking->movie->title }}
                </td>
                <td>
                    {{ $booking->movie->director_name }}
                </td>
                <td>
                    {{ $booking->hall_show->hall->title }}
                </td>
                <td>
                    {{ $booking->hall_show->show->title }} - {{ $booking->hall_show->show->time }}
                </td>
                <td>
                    ${{ $booking->price ? $booking->price: 0 }}
                </td>
            </tr>
        @endforeach

    @else

        <tr>
            <td colspan="3"><h4>No Bookings!</h4></td>
        </tr>

    @endif

    </tbody>


</table>
