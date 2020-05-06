@extends('layouts.principal')
@section('titulo','Opções')
@section('conteudo')


<div class="options">
	<ul>
		<li><a class="warning" href="{{route('outras.opcoes',1)}}">warning</a></li>
		<li><a class="info" href="{{route('outras.opcoes', 2)}}">info</a></li>
		<li><a class="success" href="{{route('outras.opcoes', 3)}}">success</a></li>		
		<li><a class="error" href="{{route('outras.opcoes', 4)}}">error</a></li>
	</ul>
</div>

@if(isset($opcao))
	@switch($opcao)
		@case(1)
			@component('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
			<p><strong>Warning</strong></p>
			<p>Ocorreu um erro inesperado</p>
			@endcomponent
			@break
		@case(2)
		@component('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'info'])
			<p><strong>Info</strong></p>
			<p>Ocorreu um erro inesperado</p>
			@endcomponent
			@break
		@case(3)
		@component('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'success'])
			<p><strong>Sucess</strong></p>
			<p>Ocorreu um erro inesperado</p>
			@endcomponent
			@break
		@case(4)
		@component('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'error'])
			<p><strong>Error</strong></p>
			<p>Ocorreu um erro inesperado</p>
			@endcomponent
			@break
	@endswitch					

@endif



@endsection