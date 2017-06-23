@extends('main')

@section('content')
<h1>Edit Customer</h1>

<table class="table">
	<tr>
		<td>{{$customer->name or 'no name'}}</td>
	</tr>
</table>
@stop