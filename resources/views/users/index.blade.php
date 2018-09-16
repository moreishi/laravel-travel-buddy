@extends('layouts.app2')

@section('content')

	<!-- <div class="container">
		<h1>Users <em>{{ $count }}</em></h1>
		<div class="row">
			@foreach($users as $user)
			

			<div class="media col-4" style="margin-bottom: 15px;">
			  <a href="{{ route('user', $user->id) }}"><img width="72" class="mr-3" src="https://www.microsoft.com/en-us/research/wp-content/themes/microsoft-research-theme/images/blank-avatar.png" alt="{{ $user->name }}"></a>
			  <div class="media-body">
			    <h5 class="mt-0">{{ $user->name }} {{ $user->age }}</h5>
			    {{ $user->country }}
			  </div>
			</div>

			@endforeach
		</div>

	</div> -->

	
@endsection