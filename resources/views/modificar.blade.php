@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Selecciona sobre que clase deseas modificar</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			<tr>
				<td width="50%">
				<li><a href="/modificar/usuario">Usuarios</a></li>
				<li><a href="/modificar/denuncia">Denuncias</a></li>
				<li><a href="/modificar/cuartel">Cuarteles</a></li>
				<li><a href="/modificar/tarea">Tareas</a></li>
			</tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
