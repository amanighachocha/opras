@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
           @include('layouts.menu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Reports</div>

                <div class="panel-body">
                   @include('layouts.errors')

                    {!! Form::open(['url'=>'reports/store','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                    
                    {!! Form::label('','Title') !!}
                    {!! Form::text('title',null,['class'=>'form-control','required'=>true]) !!}
                    
                    {!! Form::label('','Content') !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','rows'=>3]) !!}

                    {!! Form::label('','Target') !!}
                    <select name="target_id" class="form-control">
                       @foreach($targets as $target)
                       <option value="{{ $target->id }}">{{ $target->name }}</option>
                       @endforeach
                    </select>

                    {!! Form::label('','Report attachment') !!}
                    {!! Form::file('attachment') !!}

                    <button type="submit" class="btn btn-primary">Submit Report</button>

                    {!! Form::close() !!}
                    <table class="table">
                       <tr>
                          <td>Title</td>
                          <td>Target/Subtarget</td>
                          <td>Attachment</td>
                          <td>Edit</td>
                          <td>Delete</td>
                       </tr>
                       @foreach($reports as $report)
                       <tr>
                          <td>{{ $report->title }}</td>
                          <td>{{ $report->reportable->name }}</td> 
                          <td><a href="{{ url('reports/'.$report->id.'/download') }}">{{ $report->attachment }}</a></td>
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
