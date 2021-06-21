@extends('layouts.app')

@section('content')

<div class="container">
	<form action="/eng_radicals" method="get">
		<div class="input-group">
			<input class="form-control mr-sm-2" name="eng_radicals" type="eng_radicals" placeholder="English kangxi radical names" aria-label="eng_radicals">
			<button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
		</div>
	</form>
</br>

<table class="table">
	<tbody>
		@foreach($got_kanji as $gk)
		<tr>
			<td class="h4">{{ $gk->kanji }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $got_kanji->links() }}

</div>
@endsection