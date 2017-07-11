@extends('main')

@section('content')
<h1>New Customer</h1>


@if($errors->all())
<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
		<li>{{$error}} </li>
	@endforeach
	</ul>
</div>
@endif

<form role="form" name="formCustomer" action="/customer/add" novalidate method="POST">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="name">Nome</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
	</div>

	<button type="submit" class="btn btn-success">Save</button>
</form>
@stop