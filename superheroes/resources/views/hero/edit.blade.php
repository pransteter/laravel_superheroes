@extends('layouts.app')
@section('content')
  <style>
    .heroes-image-input {
      margin: 5px 0;
    }
  </style>
  <div class="row center-block">
    <div class="col-sm-4">
      <form method="post" action="{{ action('HeroController@update', $hero->id) }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="form-group">
          <label for="nickname">Nickname:</label>
          <input id="nickname" type="text" name="nickname" class="form-control" value="{{ $hero->nickname or '' }}">
        </div>
        <div class="form-group">
          <label for="real_name">Real name:</label>
          <input id="real_name" type="text" name="real_name" class="form-control" value="{{ $hero->real_name or '' }}">
        </div>
        <div class="form-group">
         <label for="origin_description">Origin description:</label>
         <textarea class="form-control" rows="5" id="origin_description" name="origin_description" >{{ $hero->origin_description or '' }}</textarea>
        </div>
        <div class="form-group">
          <label for="superpowers">Superpowers:</label>
          <input id="superpowers" type="text" name="superpowers" class="form-control" value="{{ $hero->superpowers or '' }}">
        </div>
        <div class="form-group">
          <label for="catch_phrase">Catch phrase:</label>
          <input id="catch_phrase" type="text" name="catch_phrase" class="form-control" value="{{ $hero->catch_phrase or '' }}">
        </div>
        <div id="image-container" class="form-group">
          <button id="image-add-button" type="button" class="btn btn-success">Add image</button>
          @if (count($hero->images) > 0)
            @foreach ($hero->images as $key => $image)
              <input class="form-control heroes-image-input" placeholder="Insert the image url here. Leave the field empty if you don't" name="images[{{ $key - 1 }}]" value="{{ $image->src }}" />
            @endforeach
          @endif
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ url('hero') }}" class="btn btn-info"> Back </a>
      </form>
    </div>
  </div>
  <script>
    /* I know that I did should to make something better here but unfortunately I haven't time to do. =\ Sorry guys! */
    var currentInputNumber = {{ count($hero->images) }};

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
