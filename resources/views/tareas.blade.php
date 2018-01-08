@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	

	<h1 class="title m-b-md" align="center">Lista de Tareas</h1>


		<div class="container">
			{{$valores->links()}}
		</div>

        <div class="container">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
				<th>ZONA</th>
				<th>AGENTES</th>
				<th>ESTADO</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
				<th>FINALIZAR</th>
				
   			</tr>
			@foreach($valores as $valor)
			
			<tr>
				<td> {{ $valor->id }} </td>
				<td> {{ $valor->nombre }} </td>
				<td> {{ $valor->descripcion }} </td>
				<td> {{$valor->zona}} </td>
				<td><a href="{{action('WebController@tareasAgentes', $valor->id)}}"> Ver Agentes </a></td>
				<td> {{ $valor->estado }} </td>
				<td><a href="{{action('WebController@borrarTarea', $valor->id)}}"> Eliminar </a></td>
				<td><a href="{{action('WebController@modificarTarea', $valor->id)}}"> Modificar </a></td>
				@if ($valor->estado == 'Sin finalizar')
					<td><a href="{{action('WebController@finalizarTarea', $valor->id)}}"> Finalizar </a></td>
				@else
					<td>Finalizada</td>
				@endif

			</tr> 

			@endforeach
			</table>
		</div>

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection