@extends('layouts.principal')
@section('conteudo')
<h3>Editando Cliente</h3>

<form action="{{route('clientes.update', $cliente['id'])}}" method="POST">
	@csrf
	@method('PUT')
	<input type="text" name="nome" value="{{$cliente['nome']}}">
	<input type="submit" value="Salvar">
</form>
<br>
<a href="{{route('clientes.index')}}">Voltar</a>
@endsection