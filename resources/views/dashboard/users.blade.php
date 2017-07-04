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
                   @include('layouts.errors')
                    <table class="table">
                       <tr>
                          <td>First name</td>
                          <td>Last name</td>
                          <td>Email</td>
                          <td>Permissions</td>
                          <td>Edit</td>
                          <td>Delete</td>
                       </tr>
                       @foreach($users as $user)
                       <tr>
                          <td>{{ $user->first_name }}</td>
                          <td>{{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                           <td><a href="#" data-toggle="modal" data-target="#user-permissions-{{ $user->id }}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-ok"></span></a>
                              <!-- Modal -->
                              <div class="modal fade" id="user-permissions-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                       <?php  $user->hasRole($user->roles) ?>
                                       <div class="list-group">
                                       @foreach($permissions as $permit)
                                          @if($user->can($permit->name))
                                          <li class="list-group-item">{{ $permit->display_name }}</li>

                                          @endif
                                       @endforeach
                                       </div>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- end of modal -->
                          </td>
                          <td><a href="#" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a></td>
                          <td><a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a></td>
                       </tr>
                       @endforeach
                    </table>
                    
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
