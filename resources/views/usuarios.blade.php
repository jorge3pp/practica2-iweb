@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Lista de usuarios</h1>

		<div class="container">
			{{$valores->links()}}
		</div>

        <div class="container">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>EMAIL</th>
				<th>DNI</th>
				<th>DIRECCION</th>
				<th>TELEFONO</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
   			</tr>
			@foreach($valores as $valor)

				
			<tr>
				<td> {{ $valor->id }} </td>
				<td><a href="{{action('WebController@usuarioDenuncia', $valor->id)}}"> {{ $valor->name }} </a></td>
				<td> {{ $valor->email }} </td>
				<td> {{ $valor->DNI}} </td>
				<td> {{ $valor->direccion}} </td>
				<td> {{ $valor->telefono}} </td>
				<td><a href="{{action('WebController@borrarUsuario', $valor->id)}}"> Eliminar </a></td>
				<td><a href="{{action('WebController@modificarUsuario', $valor->id)}}"> Modificar </a></td>
			</tr> 

			@endforeach
			</table>
		</div>

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection