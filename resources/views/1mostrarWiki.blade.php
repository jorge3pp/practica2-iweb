@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	<h1 align="center">Wiki</h1>
	
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

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="login">Iniciar sesión</a></li>
						<li><a href="register">Registrarse</a></li>
					@else

					@endif
				</ul>
			</div>
		</div>

    
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
						<li><a href="/repositoriosp">Editar</a></li>
						<li><a href="/repositoriosp">Crear nueva página</a></li>
					</ul>
			</div>
	</nav>
	
			
        <div>
            <h3 align="center">Nombre del repositorio: {{ $valor->nombre }}</h3>
            <h5 align="center">Clone: {{ $wiki->clonelink }}</h5>
            <h5 align="center">Milestone: {{ $wiki->milestones }}</h5>
				<pre class ="container">
					{{ $wiki->contenido }}
				</pre>
        </div>

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection
