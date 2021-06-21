@extends('layouts.app')

@section('content')

<div class="container">
	<form action="/eng_radicals" method="get">
		<div class="input-group">
			<input class="form-control mr-sm-2" name="eng_radicals" type="eng_radicals" placeholder="English kangxi radical names" aria-label="eng_radicals">
			<button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
		</div>
	</form>
</div>
</br>

</div>
@endsection
