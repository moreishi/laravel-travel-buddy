@extends('layouts.app')

@section('content')
	<div class="container">


		<row class="col-4">
			<h1>{{ $user->name }} <em style="font-size: 22px;">{{ $user->age }} years</em></h1>
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://www.microsoft.com/en-us/research/wp-content/themes/microsoft-research-theme/images/blank-avatar.png" alt="Card image cap" style="width: 150px;">
			  <div class="card-body">
			  	<a class="btn btn-success" href="javascript:;">Send message</a>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			</div>
		</row>
		<row class="col-8">
			<ul>
				<li>City, County: {{ $user->city }}, {{ $user->country }}</li>
				<li>Nationality: {{ $nationality }}  <natinality></natinality> </li>
				<li>Sex: {{ $user->sex }}</li>
				<li>Language:</li>
				<li>Height: {{ $height }}</li>
				<li>Body Type: {{ $bodytype }}</li>
				<li>Eyes: {{ $eyes }}</li>
				<li>Hair: {{ $hair }}</li>
				<li>Looking For:</li>
				<li>Wants to visit:</li>
			</ul>

			<p><strong>About Me</strong></p>
			<div>{{ $user->about }}</div>

			<div>
				<h3>More Photos</h3>
			</div>			
		</row>

		<div>
			<p>Member Since: {{ $user->created_at }}</p>
		</div>

	</div>
	
@endsection