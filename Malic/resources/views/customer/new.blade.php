@extends('main')

@section('content')
<h1>New Customer</h1>

<form role="form" name="formCustomer" action="/customer/add" novalidate method="POST">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="name">Nome</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Name">
	</div>
	<button type="submit" class="btn btn-success">Save</button>
</form>
@stop