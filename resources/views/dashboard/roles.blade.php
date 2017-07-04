@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
           @include('layouts.menu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">roles</div>

                <div class="panel-body">
                   @include('layouts.errors')
                    <table class="table">
                       <tr>
                          <td>Display name</td>
                          <td>Name</td>
                          <td>Permissions</td>
                          <td>Edit</td>
                          <td>Delete</td>
                       </tr>
                       @foreach($roles as $role)
                       <tr>
                          <td>{{ $role->display_name }}</td>
                          <td>{{ $role->name }}</td>
                          <td><a href="#" data-toggle="modal" data-target="#role-permissions-{{ $role->id }}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-ok"></span></a>
                              <!-- Modal -->
                              <div class="modal fade" id="role-permissions-{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                      {!! Form::open(['url'=>'roles/permissions/store']) !!}

                                       {!! Form::input('hidden','role_id',$role->id) !!}
                                       
                                       @foreach($permissions as $permit)
                                          <div class="checkbox">
                                            <label>
                                              <input name="{{ $permit->id}}" value="{{ $permit->id }}"type="checkbox"> {{ $permit->display_name }}
                                            </label>
                                          </div>
                                       @endforeach
                                       <button type="submit" class="btn btn-info">Save Permissions</button>
                                      {!! Form::close() !!}

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
