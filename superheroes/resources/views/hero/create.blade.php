@extends('layouts.app')
@section('content')
  <style>
    .heroes-image-input {
      margin: 5px 0;
    }
  </style>
  <div class="row center-block">
    <div class="col-sm-4">
      <form method="post" action="{{ $action or url('hero') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nickname">Nickname:</label>
          <input id="nickname" type="text" name="nickname" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="real_name">Real name:</label>
          <input id="real_name" type="text" name="real_name" class="form-control" required>
        </div>
        <div class="form-group">
         <label for="origin_description">Origin description:</label>
         <textarea class="form-control" rows="5" id="origin_description" name="origin_description" required></textarea>
        </div>
        <div class="form-group">
          <label for="superpowers">Superpowers:</label>
          <input id="superpowers" type="text" name="superpowers" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="catch_phrase">Catch phrase:</label>
          <input id="catch_phrase" type="text" name="catch_phrase" class="form-control" required>
        </div>
        <div id="image-container" class="form-group">
          <button id="image-add-button" type="button" class="btn btn-success">Add image</button>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ url('hero') }}" class="btn btn-info"> Back </a>
      </form>
    </div>
  </div>
  <script>
    /* I know that I should to make something better here but unfortunately I haven't time to do. =\ Sorry guys! */
    var currentInputNumber = 0;

    var addImageInput = function() {
      var input = document.createElement('input');

      input.id = 'image-input' + currentInputNumber;
      input.name = 'images[' + currentInputNumber + ']';
      input.placeholder = 'Insert the image url here. Leave the field empty if you don\'t';
      input.classList.add('form-control');
      input.classList.add('heroes-image-input');

      document.getElementById('image-container').appendChild(input);

      currentInputNumber++;
    }

    document.getElementById('image-add-button').addEventListener("click", addImageInput);

  </script>
@endsection
