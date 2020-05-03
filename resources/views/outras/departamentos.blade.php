@extends('layouts.principal')
@section('titulo','Departamentos')
@section('conteudo')
<h1>Departamentos</h1>
<ul>
	<li>Computadores</li>
	<li>Eletrônicos</li>
	<li>Acessórios</li>
	<li>Roupas</li>
</ul>

@component('componentes.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'info'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('componentes.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'error'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('componentes.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'success'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('componentes.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@endsection