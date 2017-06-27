@extends('main')

@section('content')
<h1>Customer list</h1>

<table class="table">
	@foreach ($customers as $customer)
	<tr>
		<td>{{$customer->name}}</td>
		<td><a href="/customer/edit/{{$customer->id}}" ><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
		<td><a href="/customer/remove/{{$customer->id}}" ><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
	@endforeach
</table>

@if(old('name'))
<p class="alert alert-success text-center">
	Customer({{old('name')}}) added with success!
</p>
@endif

@stop