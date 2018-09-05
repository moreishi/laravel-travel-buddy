@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>My Profile</h1>
		<ul>
			<li><a href="edit/{{ $user->id }}">Profile Information</a></li>
			<li><a href="javascript:;">Phone</a></li>
			<li><a href="javascript:;">Email</a></li>
			<li><a href="javascript:;">Change Password</a></li>
			<li><a href="javascript:;">Preferences</a></li>
		</ul>
	</div>
@endsection