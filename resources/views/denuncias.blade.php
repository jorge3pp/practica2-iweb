@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center">Lista de denuncias</h1>
        

		<div class="container">
			{{$valores->links()}}
		</div>

		<div class="container">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>MOTIVO</th>
				<th>AGENTE</th>
				<th>USUARIO DENUNCIADO </th>
				<th>MULTA</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
   			</tr>
			@foreach($valores as $valor)
			<tr>
				<td> {{ $valor->id }} </td>
				<td> {{ $valor->nombre }} </td>
				<td> {{ $valor->motivo }} </td>
				<td> {{ $valor->agente_id}} </td>
				<td> {{ $valor->user_id}} </td>
				<td> {{ $valor->importe_multa }} </td>
				<td><a href="{{action('WebController@borrarDenuncia', $valor->id)}}"> Eliminar </a></td>
				<td><a href="{{action('WebController@modificarDenuncia', $valor->id)}}"> Modificar </a></td>
			</tr>
			@endforeach
			</table>
		</div>
	

	<!-- FIN Codigo Body de la página web -->


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
