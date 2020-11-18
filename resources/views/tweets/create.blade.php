@extends('welcome')
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-10">
<form method="post" action="/tweets">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Tweet Body</label>
    <textarea cols="4" rows="8" class="form-control" name="body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection