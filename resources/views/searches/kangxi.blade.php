@extends('layouts.app')

@section('content')
<div class="container">

<table class="table">
	<tbody>
		@foreach($kanji as $kan)
		<tr>
			<td class="h4">{{ $kan->radical }}</td>
			<td class="h4">{{ $kan->english_name }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $kanji->links() }}

</div>
@endsection