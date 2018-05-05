@extends('layouts.app')
@section('content')
  <div class="row center-block">
    <div class="col-sm-4">
      <form method="post" action="{{ $action or url('hero') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nickname">Nickname:</label>
          <input id="nickname" type="text" name="nickname" class="form-control">
        </div>
        <div class="form-group">
          <label for="real_name">Real name:</label>
          <input id="real_name" type="text" name="real_name" class="form-control" >
        </div>
        <div class="form-group">
         <label for="origin_description">Origin description:</label>
         <textarea class="form-control" rows="5" id="origin_description" name="origin_description"></textarea>
        </div>
        <div class="form-group">
          <label for="superpowers">Superpowers:</label>
          <input id="superpowers" type="text" name="superpowers" class="form-control" >
        </div>
        <div class="form-group">
          <label for="catch_phrase">Catch phrase:</label>
          <input id="catch_phrase" type="text" name="catch_phrase" class="form-control" >
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
