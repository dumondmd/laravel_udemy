@extends('layouts.principal')
@section('conteudo')
<h1>Novo Cliente</h1>

<form action="{{route('clientes.store')}}" method="POST">
	@csrf
	<input type="text" name="nome">
	<input type="submit" value="Salvar">
</form>
<br>
<a href="{{route('clientes.index')}}">Voltar</a>
@endsection