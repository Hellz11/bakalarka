@extends('layouts.app')

@section('content')

<div class="container">
	<form action="/search" method="get">
		<div class="input-group">
			<input class="form-control mr-sm-2" name="search" type="search" placeholder="Japanese/English word or text" aria-label="search">
			<button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
		</div>
	</form>
</div>
@endsection
