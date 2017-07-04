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

@if(Session::has('success_message'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <p>{{ Session::get('success_message') }}</p>
  </div>
@endif