@extends('main')

@section('content')
<h1>Login</h1>


@if($errors->all())
<div class="alert alert-danger">
	<ul>			
	@foreach($errors->all() as $error)
		<li>{{$error}} </li>
	@endforeach
	</ul>
</div>
@endif

<form role="form" name="formCustomer" action="/login" novalidate method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
	</div>

	<div class="form-group">
		<label for="password">Senha</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Senha">
	</div>
	
	<button type="submit" class="btn btn-success">Login</button>
</form>
@stop