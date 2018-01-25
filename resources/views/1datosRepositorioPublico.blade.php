@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Detalles del repositorio</h1>
	@if (Auth::guest())

	<nav class="navbar navbar-default navbar-inverse container">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Barra de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<!--<a class="navbar-brand" href="/">Inicio</a>-->
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					@if (Auth::guest())

						<ul class="nav navbar-nav">
							<li><a href="{{action('WebController@issueRepositorio', $valor->id)}}">Issues</a></li>
						</ul>
						

					@endif
				</div>
			</div>
		</nav>

	@else
		@if (Auth::user()->id == $valor->administrador || Auth::user()->email == 'Admin@admin.com')

		<nav class="navbar navbar-default navbar-inverse container">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Barra de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<!--<a class="navbar-brand" href="/">Inicio</a>-->
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					@if (Auth::guest())

						<ul class="nav navbar-nav">
							<li><a href="/repositoriosp">Repositorios destacados</a></li>
						</ul>
						
					@else
						<ul class="nav navbar-nav">
							<li><a href="{{action('WebController@issueRepositorio', $valor->id)}}">Issues</a></li>
							<li><a href="{{action('WebController@pullrequestRepositorio', $valor->id)}}">Pull Requests</a></li>
							<li><a href="{{action('WebController@mostrarWiki', $valor->id)}}">Wiki</a></li>
							<li><a href="{{action('StorageController@index', $valor->id)}}">SUBIR CODIGO</a></li>
							<li><a href="/repositorios/{{$valor->id}}/storage/descargararchivo/{{$valor->id}}">DESCARGAR CODIGO</a></li>
							<li><a href="{{action('StorageController@mostrarfichero', $valor->id)}}">VER CODIGO</a></li>
							
							
						</ul>

					@endif

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="login">Iniciar sesión</a></li>
							<li><a href="register">Registrarse</a></li>
						@else

						@endif
					</ul>
				</div>
			</div>
		</nav>


		@else

		@endif



	@endif

        <div class="container">
            <h1>Nombre: {{ $valor->nombre }}</h1>

            @if($valor->privPub == '0')
            <p>Tipo de repositorio: PRIVADO</p>

            @else
            <p>Tipo de repositorio: PÚBLICO</p>
            @endif
            
            <pre class ="container">
                Estrellas del repositorio: {{ $valor->estrellas }}
                Contador seguidores: {{$valor->contador_seguidores}}
            </pre>
        </div>


		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection