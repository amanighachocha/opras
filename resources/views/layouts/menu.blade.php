<div class="list-group">
<a class="list-group-item" href="{{ url('dashboard') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
<a class="list-group-item" href="{{ url('users') }}"><span class="glyphicon glyphicon-user"></span> Users</a>
@if(Auth::user()->hasRole('admin'))
<a class="list-group-item" href="{{ url('roles') }}"><span class="glyphicon glyphicon-briefcase"></span> Roles</a>
@endif
<a class="list-group-item" href="{{ url('targets') }}"><span class="glyphicon glyphicon-folder-open"></span> Targets</a>
<a class="list-group-item" href="{{ url('reports') }}"><span class="glyphicon glyphicon-file"></span> Reports</a>
<a class="list-group-item" href="{{ url('signout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>