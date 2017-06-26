@section('menu')
<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="{{action('CustomerController@list')}}">
			Listagem
		</a>
	</li>
	<li>
		<a href="{{action('CustomerController@new')}}">
			Novo
		</a>
	</li>
</ul>
@stop