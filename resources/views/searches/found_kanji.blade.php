@extends('layouts.app')

@section('content')
<div class="container">

<table class="table">
	<tbody>
		@foreach($ava_kanji as $ak)
		<tr>
			<td class="h4">{{ $ak->kanji }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>
@endsection