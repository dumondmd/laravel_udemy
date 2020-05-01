<h1>Clientes</h1>
<h3><a href="{{route('clientes.create')}}">Novo cliente</a></h3>
<ul>
	@foreach($clientes as $c)
		<li>{{$c['nome']}} |
			<a href="{{route('clientes.edit', $c['id'])}}">Editar</a>
		</li>
	@endforeach
</ul>