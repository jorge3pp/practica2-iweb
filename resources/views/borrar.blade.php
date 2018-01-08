@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Selecciona la clase en la que quieres borrar datos</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			<tr>
				<td width="50%"><input checked="checked" class="field" name="res" type="radio" value="1"><font size=5>Usuarios</font><br>
				<input class="field" name="res" type="radio" value="2"><font size=5>Denuncias</font><br>
				<input class="field" name="res" type="radio" value="3"><font size=5>Tareas</font><br>
				<input class="field" name="res" type="radio" value="4"><font size=5>Agentes</font><br>
				<input class="field" name="res" type="radio" value="5"><font size=5>Cuarteles</font></td>
			</tr>
			<tr>
				<td><br><h3>Introduce el id del elemento que deseas borrar</td>
			</tr>
			<tr>
				<td align="center"><label for="id">ID del elemeto</label><input type="text" name="id" id="id">
				<input type="submit" value="Borrar elemento"></td>
			</tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection