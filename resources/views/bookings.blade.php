@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Your Bookings</h4></div>

                <div class="panel-body">
                    @include('partials.panel-bookings')
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
