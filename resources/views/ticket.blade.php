@extends('layouts.app')

@section('title', 'Book Ticket')


@section('content')
<div class="container">
    <div class="row">
        <ticket allData="{{ json_encode($movies) }}"></ticket>
    </div>

</div>
@endsection
