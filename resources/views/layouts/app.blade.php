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
		
		.wiki-rightbar {
			float: right;
			width: 230px;
		}
		.wiki-body .markdown-body {
			padding: 0 30px;
			margin: 0 -30px;
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
				<a href="/"><img src="/../icono.png" width="40px" height="40px" alt="Logo"/></a>
				<!--<a class="navbar-brand" href="/">Inicio</a>-->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if (Auth::guest())

					<ul class="nav navbar-nav">
						<li><a href="/repositoriosp">Repositorios destacados</a></li>
					</ul>
					
				@else

					@if (Auth::user()->email == 'Admin@admin.com')
						<ul class="nav navbar-nav">
							<li><a href="/repositoriosp">Repositorios destacados</a></li>
							<li><a href="/anadirtiporepo">Modificar lenguajes prog. repositorio</a></li>
							<li><a href="/modificarrepositorios">Modificar Repositorios</a></li>
						</ul>

					@else

						<ul class="nav navbar-nav">
							<li><a href="/repositoriosp">Repositorios destacados</a></li>
							<li><a href="/repositorios">Mis repositorios</a></li>
							<li><a href="/new">Nuevo repositorio</a></li>
						</ul>
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
