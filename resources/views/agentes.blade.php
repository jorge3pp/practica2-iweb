@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Lista de agentes</h1>

		<div class="container">
			{{$valores->links()}}
		</div>

        <div class="container">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>TAREAS</th>
				<th>DENUNCIAS</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
   			</tr>
			@foreach($valores as $valor)

				
			<tr>
				<td> {{ $valor->id }} </td>
				<td><a href="{{action('WebController@agenteUser', $valor->id)}}"> {{ $valor->nombre }} </a></td>
				<td><a href="{{action('WebController@agentesTareas', $valor->id)}}"> Tareas </a></td>
				<td><a href="{{action('WebController@denunciaAgente', $valor->id)}}"> Denuncias </a></td>
				<td><a href="{{action('WebController@borrarAgente', $valor->id)}}"> Eliminar </a></td>
				<td><a href="{{action('WebController@modificarAgente', $valor->id)}}"> Modificar </a></td>
			</tr> 

			@endforeach
			</table>
		</div>

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection