@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>{{ $user->name }}</h3>

		<div>
			<form method="POST" action="{{ route('edit-profile') }}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="name">Name: </label>
			    <input name="name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }}">
			  </div>
			  <div class="form-group">
			    <label for="birthdate">Date of birth</label>
			    <input name="birthdate" type="date" class="form-control" id="birthdate" value="{{ $user->birthdate }}">
			  </div>
			  <div class="form-group">
			    <label for="location">Location</label>
			    <input name="location" type="text" class="form-control" id="location" placeholder="Enter location" value="{{ $user->location }}">
			  </div>

			  <div class="form-group">
			    <label for="nationality">Nationality</label>
			    <select name="nationality" class="form-control" id="nationality">
					@foreach($nationality as $n)

						@if($user->nationality == $n['value'] )
							<option value="{{ $n['value'] }}" selected="selected">{{ $n['name'] }}</option>
						@else
							<option value="{{ $n['value'] }}">{{ $n['name'] }}</option>
						@endif
						
					@endforeach
				</select>
			  </div>

			  <div class="form-group">
			    <label for="height">Height</label>
			    <select name="height" class="form-control" id="height">
					@foreach($heights as $height)
						@if($user->height == $height['value'])
							<option value="{{ $height['value'] }}" selected="selected">{{ $height['name'] }}</option>
						@else
							<option value="{{ $height['value'] }}">{{ $height['name'] }}</option>
						@endif
						
					@endforeach
				</select>
			  </div>

			  <div class="form-group">
			    <label for="bodytype">Body Type</label>
			    <select name="bodytype" class="form-control" id="bodytype">
			    	@foreach($bodytype as $b)
						@if($user->bodytype == $b['value'])
							<option value="{{ $b['value'] }}" selected="selected">{{ $b['name'] }}</option>
						@else
							<option value="{{ $b['value'] }}">{{ $b['name'] }}</option>
						@endif
						
					@endforeach
			    </select>

			  </div>

			  <div class="form-group">
			    <label for="eyes">Eyes</label>
			    <select name="eyes" class="form-control" id="eyes">
			    	@foreach($eyes as $eye)
						@if($user->eyes == $eye['value'])
							<option value="{{ $eye['value'] }}" selected="selected">{{ $eye['name'] }}</option>
						@else
							<option value="{{ $eye['value'] }}">{{ $eye['name'] }}</option>
						@endif
						
					@endforeach
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="hair">Hair</label>
			    <select name="hair" class="form-control" id="hair">
			    	@foreach($hair as $h)
						@if($user->hair == $h['value'])
							<option value="{{ $h['value'] }}" selected="selected">{{ $h['name'] }}</option>
						@else
							<option value="{{ $h['value'] }}">{{ $h['name'] }}</option>
						@endif
						
					@endforeach
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="hair">{{ __('About') }}</label>
			    <textarea name="about" class="form-control">{{ $user->about }}</textarea>
			  </div>

			  	<div class="form-group">
				  	<div class="form-check">

				  		@if($user->notification === 'YES')
					  	<input class="form-check-input" type="checkbox" name="notification" id="notification" checked="checked">

					  	@else
					  	<input class="form-check-input" type="checkbox" name="notification" id="notification">
					  	@endif


					  <label class="form-check-label" for="notification">
					    Allow user email notification
					  </label>
					</div>
				</div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>

	</div>

@endsection