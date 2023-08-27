@if($message = Session::get('message'))
  <div class="alert alert-success">
    {{ $message }}
  </div>
@endif
@if($message = Session::get('delete'))
    <div class="alert alert-danger">
    {{ $message }}
    </div>
@endif