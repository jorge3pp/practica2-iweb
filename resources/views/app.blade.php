<!DOCTYPE html>
@extends('welcome')
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cuartel</title>

	<link href="/css/app.css" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


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
				<a href="/"><img src="../Escudo Guardia Civil.jpg" width="30px" height="40px" alt="Logo"/></a>
				<!--<a class="navbar-brand" href="/">Inicio</a>-->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/agentes"><font color="#000000" ><b>Agentes</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/cuarteles"><font color="#000000" ><b>Cuarteles</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/denuncias"><font color="#000000" ><b>Denuncias</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/tareas"><font color="#000000" ><b>Tareas</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/usuarios"><font color="#000000" ><b>Usuarios</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/modificar"><font color="#000000" ><b>Modificar datos</b></font></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/insertar"><font color="#000000" ><b>Insertar datos</b></font></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/login"><font color="#000000" ><b>Login</b></font></a></li>
						<li><a href="/register"><font color="#000000" ><b>Register</b></font></a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout"><font color="#000000" ><b>Logout</b></font></a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
