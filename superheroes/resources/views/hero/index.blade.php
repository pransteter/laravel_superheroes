@extends('layouts.app')
@section('content')
<div class="row center-block">
	<div class="col-sm-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nickname</th>
					<th>Image</th>
					<th>Actions</th>
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
					<th>
						<a class="btn btn-info" href="{{ action('HeroController@show', $hero->id) }}" style="float: left; margin: 2px;">View</a>
						<a class="btn btn-warning" href="{{ action('HeroController@edit', $hero->id) }}" style="float: left; margin: 2px;">Edit</a>
						<form method="post" action="{{ action('HeroController@destroy', $hero->id) }}" style="float: left; margin: 2px;">
							{{ csrf_field() }}
							{{ method_field('delete') }}
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
