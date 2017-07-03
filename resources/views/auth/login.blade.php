@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                  @if(count($errors) != 0)
                   <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      @foreach($errors as $error)
                       <p>{{ $error->message }}</p>
                      @endforeach
                    </div>
                  @endif

                  @if(Session::has('error_message'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ Session::get('error_message') }}</p>
                    </div>
                  @endif
                    

                    {!! Form::open(['url'=>'authenticate','role'=>'form','class'=>'form-horizontal']) !!}
                    
                       
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> -->
                                {!! Form::email('email',old('email'),['class'=>'form-control','required'=>true,'autofocus'=>true]) !!}

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <!-- <input id="password" type="password" class="form-control" name="password" required> -->
                                {!! Form::password('password',['class'=>'form-control','required'=>true]) !!}

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <!-- <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> -->
                                        {!! Form::checkbox('remember',true,['checked'=>old('remember')? 'checked':'false'] ) !!}

                                        Remember Me
                                    </label>
                                </div>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    }

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
