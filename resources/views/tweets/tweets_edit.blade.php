@extends('welcome')
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-10">
<form method="post" action="{{route('tweets_edit',$tweets->id) }}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Tweet Body</label>
    <textarea cols="4" rows="8" class="form-control" name="body">{{$tweets->body}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection