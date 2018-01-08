<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@LaravelSweetAlertCSS
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--  -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style type="text/css">
		body{
			background: -webkit-linear-gradient(left, #8AF3F9, white);
			background: -moz-linear-gradient(left, #8AF3F9, white);
			background: -o-linear-gradient(left, #8AF3F9, white);
			background: linear-gradient(left, #8AF3F9, white);
		}

		
	</style>
	
    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
	
   <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Barra de navegacion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/"><img src="/../Escudo Guardia Civil.jpg" width="30px" height="40px" alt="Logo"/></a>
				<!--<a class="navbar-brand" href="/">Inicio</a>-->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if (Auth::guest())

					<ul class="nav navbar-nav">
						<li><a href="/cuartelesp">Cuarteles</a></li>
					</ul>
					
				@else
					@if(Auth::user()->rol == '3')
					<ul class="nav navbar-nav">
						<li><a href="/agentes">Agentes</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/cuarteles">Cuarteles</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/denuncias">Denuncias</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/tareas">Tareas</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/usuarios">Usuarios</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/insertar">Insertar datos</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li><a href="/search">Búsqueda</a></li>
					</ul>

					@else
						@if(Auth::user()->rol == '2')
						<ul class="nav navbar-nav">
						<li><a href="/tareasporagente">Tareas</a></li>
						</ul>
						<ul class="nav navbar-nav">
						<li><a href="/cuartelesporagente">Cuarteles</a></li>
						</ul>
						
						<ul class="nav navbar-nav">
						<li><a href="/denunciasporagente">Denuncias</a></li>
						</ul>
						@else
							<ul class="nav navbar-nav">
							<li><a href="/cuartelesp">Cuarteles</a></li>
							</ul>
							<ul class="nav navbar-nav">
								<li><a href="/denunciasp">Denuncias</a></li>
							</ul>
						@endif
					@endif
				@endif

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="login">Iniciar sesión</a></li>
						<li><a href="register">Registrarse</a></li>
					@else
						<!-- Cambiar el href para que muestre los datos del usuario logueado -->
						<li><a href="/profile">{{ Auth::user()->name }}</a></li>
						<li><a href="/auth/logout">Cerrar sesión</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	@LaravelSweetAlertJS
</body>
</html>
