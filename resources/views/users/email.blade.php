@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>{{ $user->name }}</h3>

		<div>
			<form method="POST" action="">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="email">Email </label>
			    <input type="email" class="form-control" id="name" value="{{ $user->email }}" disabled="disabled">
			  </div>

			  <div class="form-group">
				  	<div class="form-check">
					  <input class="form-check-input" type="checkbox" name="box1" id="box1">
					  <label class="form-check-label" for="box1">
					        I want to get email notifications about new messages
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" name="box2" id="box2">
					  <label class="form-check-label" for="box2">
					    	I want to get email about notifications
					  </label>
					</div>
				</div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>

	</div>

@endsection

@section('page-scripts')

@endsection