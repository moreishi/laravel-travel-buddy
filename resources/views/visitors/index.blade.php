@extends('layouts.app')

@section('content')
	


	<div class="container">
		<h1>Views</h1>
		<p>These profiles has visited your page.</p>
		<div class="row">
			@foreach($visitors as $v)
			

			<div class="media col-4" style="margin-bottom: 15px;">
			  <a href="{{ route('user', $v->visitor->id) }}"><img width="72" class="mr-3" src="https://www.microsoft.com/en-us/research/wp-content/themes/microsoft-research-theme/images/blank-avatar.png" alt="{{ $v->visitor->name }}"></a>
			  <div class="media-body">
			    <h5 class="mt-0">{{ $v->visitor->name }} {{ $v->visitor->age }}</h5>
			    {{ $v->visitor->country }} <em>{{ $v->updated_at }}</em>
			  </div>
			</div>

			@endforeach
		</div>

	</div>

@endsection