@extends('layouts.app')

@section('content')
<div class="container">

<form action="/search" method="get">
		<div class="input-group">
			<input class="form-control mr-sm-2" name="search" type="search" placeholder="Japanese/English word or text" aria-label="search">
			<button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
		</div>
</form>
</br>

<table class="table">
	<tbody>
		@foreach($posts as $post)

		@php
			preg_match_all("/\(.+?\).+?(?=(?:(?:\()|$))/", trim($post->meaning, '/'), $allmatches);
			$matches = $allmatches[0];
		@endphp

		<tr>
			<td class="h4">{{ $post->word }}</td>
			<td class="h4">{{ $post->reading }}</td>
			<td>
			@foreach($matches as $match)
				{{ trim($match, '/') }} <br>
			@endforeach
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}

</div>
@endsection