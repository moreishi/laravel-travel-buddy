@extends('layouts.app')	

@section('content')
	<div class="container">
		<h1>Update Password</h1>
		<form method="POST" action="{{ route('edit-password') }}">
			{{ csrf_field() }}
		  <div class="form-group row">
		    <label for="currentPassword" class="col-sm-2 col-form-label">Current Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control {{ $errors->has('currentPassword') ? ' is-invalid' : '' }}" id="currentPassword" name="currentPassword" />
		      	@if ($errors->has('currentPassword'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('currentPassword') }}</strong>
	                </span>
           		 @endif
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="newPassword" class="col-sm-2 col-form-label">New Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control {{ $errors->has('newPassword') ? ' is-invalid' : '' }}" id="newPassword" name="newPassword" />
		      @if ($errors->has('newPassword'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('newPassword') }}</strong>
	                </span>
           		 @endif
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="repeatPassword" class="col-sm-2 col-form-label">Repeat New Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control {{ $errors->has('repeatPassword') ? ' is-invalid' : '' }}" id="repeatPassword" name="repeatPassword" />
		      @if ($errors->has('repeatPassword'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('repeatPassword') }}</strong>
	                </span>
           		 @endif
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection