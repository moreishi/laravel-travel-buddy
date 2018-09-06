@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>My Profile</h1>
		<ul>
			<li><a href="edit/{{ $user->id }}">Profile Information</a></li>
			<li><a href="javascript:;">Phone</a></li>
			<li><a href="{{ route('edit-profile-email') }}">Email</a></li>
			<li><a href="{{ route('edit-password') }}">Change Password</a></li>
			<li><a href="javascript:;">Preferences</a></li>
		</ul>
	</div>
@endsection