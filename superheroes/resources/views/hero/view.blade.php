@extends('layouts.app')
@section('content')
<div class="row center-block">
  <div class="col-sm-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Attribute</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nickname:</td>
          <td>{{ $hero->nickname }}</td>
        </tr>
        <tr>
          <td>Real name:</td>
          <td>{{ $hero->real_name }}</td>
        </tr>
        <tr>
          <td>Origin description:</td>
          <td>{{ $hero->origin_description }}</td>
        </tr>
        <tr>
          <td>Superpowers:</td>
          <td>{{ $hero->superpowers }}</td>
        </tr>
        <tr>
          <td>Catch phrase:</td>
          <td>{{ $hero->catch_phrase }}</td>
        </tr>
        @if (count($hero->images) > 0)
        <tr>
          <td>Images:</td>
          <td>
            @foreach ($hero->images as $image)
              <img title="{{ $image->title }}" src="{{ $image->src }}" />
            @endforeach
          </td>
        </tr>
        @endif
      </tbody>
    </table>
    <a href="{{ url('hero') }}" class="btn btn-info"> Back </a>
  </div>
</div>
@endsection
