@extends('layouts.principal')
@section('titulo','Clientes')
@section('conteudo')
	<h1>{{$titulo}}</h1>
	<h3><a href="{{route('clientes.create')}}">Novo cliente</a></h3>

	@if(count($clientes)>0)
	<ul>
		@foreach($clientes as $c)
			<li>{{$c['id']}} | {{$c['nome']}} |
				<a href="{{route('clientes.edit', $c['id'])}}">Editar</a>|
				<a href="{{route('clientes.show', $c['id'])}}">Info</a>
				<form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
					@csrf
					@method('DELETE')
					<input type="submit" value="Apagar">							
				</form>
			</li>
		@endforeach
	</ul>

	<hr>

	@for($i=0;$i<10;$i++)
		{{$i}},
	@endfor	

	<br>

	@for($i=0;$i<count($clientes); $i++)
		{{$clientes[$i]['nome']}},
	@endfor

	<br>

	@foreach($clientes as $c)
		<p>
			{{$c['nome']}}|
			@if($loop->first)
				(primeiro) |
			@endif
			@if($loop->last)
				(ultimo) |
			@endif
			({{$loop->index}}) - {{$loop->iteration}} / {{$loop->count}}			
		</p>		
	@endforeach

	@else
	<h4>Não existem clientes cadastrados</h4>
	@endelse

	@endif

	@empty($clientes)
	<h4>Não existem clientes cadastrados</h4>
	@endempty
@endsection