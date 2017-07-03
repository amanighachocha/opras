@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
           @include('layouts.menu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in. {{ Auth::user()->first_name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
