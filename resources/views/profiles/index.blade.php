@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
	    <div class="col-9 pt-5">
	    	<div class="d-flex justify-content-between align-items-baseline">
		    	<div><h1>{{ $user->username }}</h1></div>
		    </div>
			    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
			   	<div>{{ $user->profile->description }}</div>
			   	<div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>

			   	@can ('update', $user->profile)
			   		<div class="pt-4"><a href="/profile/{{ $user->id }}/edit">Edit Profile</a></div>
			   	@endcan

	   	</div>
	</div>
</div>
@endsection
