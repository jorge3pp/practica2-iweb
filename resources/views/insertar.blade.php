@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Selecciona sobre que clase deseas insertar datos</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			<tr>
				<td width="50%">
				<li><a href="/insertar/agente"><h4><b>Agentes</b></h4></a></li>
				<li><a href="/insertar/usuario"><h4><b>Usuarios</b></h4></a></li>
				<li><a href="/insertar/denuncia"><h4><b>Denuncias</b></h4></a></li>
				<li><a href="/insertar/cuartel"><h4><b>Cuarteles</b></h4></a></li>
				<li><a href="/insertar/tarea"><h4><b>Tareas</b></h4></a></li>
			</tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection