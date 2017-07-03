@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
           @include('layouts.menu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <table class="table">
                       <tr>
                          <td>First name</td>
                          <td>Last name</td>
                          <td>Email</td>
                          <td>Edit</td>
                          <td>Delete</td>
                       </tr>
                       @foreach($users as $user)
                       <tr>
                          <td>{{ $user->first_name }}</td>
                          <td>{{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>Edit</td>
                          <td>Delete</td>
                       </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
