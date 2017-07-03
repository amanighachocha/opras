@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
      <div class="col-md-12">
         <div class="jumbotron">
              <h1>{{ config('app.name') }}</h1>
              
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
