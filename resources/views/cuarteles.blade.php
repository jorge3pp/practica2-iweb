@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center">Lista de cuarteles</h1>

	<div class="container">
			{{$valores->links()}}
	</div>

	<div class="container">
	<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>PROVINCIA</th>
				<th>DIRECCION</th>
				<th>HORARIO</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
   			</tr>
			@foreach($valores as $valor)
			<tr>
				<td> {{ $valor->id }} </td>
				<td> <a href="{{action('WebController@cuartelAgente', $valor->id)}}"> {{ $valor->nombre }} </a></td>
				<td> {{ $valor->direccion }} </td>
				<td> {{ $valor->horario}}
				<td><a href="{{action('WebController@borrarCuartel', $valor->id)}}"> Eliminar </a></td>
				<td><a href="{{action('WebController@modificarCuartel', $valor->id)}}"> Modificar </a></td>
			</tr>
			@endforeach
			</table>
	</div>			
		
	<!-- FIN Codigo Body de la página web -->




	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection