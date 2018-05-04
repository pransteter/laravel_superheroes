@extends('layouts.app')
@section('content')
	<table class="table table-striped">
  		<thead>
  			<tr>
  				<th>Nickname</th>
  				<th>Image</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($heroes as $hero)
  			<tr>
  				<th>{{ $hero->nickname }}</th>
  				<th>
  					@if (isset($hero->images[0]) && !empty($hero->images[0]->src))
  						<img src="{{ $hero->images[0]->src }}" width="50" height="50">
  					@endif
  				</th>
  			</tr>
  			@endforeach
  		</tbody>
	</table>
@endsection