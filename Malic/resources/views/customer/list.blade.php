@extends('main')

@section('content')
<h1>Customer list</h1>

<table class="table">
	@foreach ($customers as $customer)
	<tr>
		<td>{{$customer->name}}</td>
		<td><a href="/customer/edit/{{$customer->_id}}" ><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
	</tr>
	@endforeach
</table>
@stop