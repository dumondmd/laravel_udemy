<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/principal.css')}}">
	<title>@yield('titulo')</title>
</head>
<body>	
	<div class="row">
		<div class="col1">
			<div class="menu">
				<ul>
					<li><a class="{{request()->routeIs('clientes.*') ? 'active': ''}}"
				    	href="{{route('clientes.index')}}">Clientes</a>
				    </li>

					<li><a class="{{request()->routeIs('outras.produtos') ? 'active': ''}}"
						href="{{route('outras.produtos')}}">Produtos</a>
					</li>

					<li><a class="{{request()->routeIs('outras.departamentos') ? 'active': ''}}"
						href="{{route('outras.departamentos')}}">Departamentos</a>
					</li>


					<li><a class="{{request()->routeIs('outras.opcoes') ? 'active': ''}}"
						href="{{route('outras.opcoes')}}">Opções</a>
					</li>

					

				</ul>	
			</div>					
		</div>
		<div class="col2">
			@yield('conteudo')
		</div>
	</div>
</body>
</html>