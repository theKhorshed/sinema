@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>All Movie and Shows</h4></div>

                <div class="panel-body">
                    @include('partials.panel-all-shows')
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Movies</h4></div>

                <div class="panel-body">
                    @include('partials.panel-movies')
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Shows</h4></div>

                <div class="panel-body">
                    @include('partials.panel-shows')
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Halls</h4></div>

                <div class="panel-body">
                    @include('partials.panel-halls')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
