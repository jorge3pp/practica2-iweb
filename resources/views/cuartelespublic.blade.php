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
				<th>PROVINCIA</th>
				<th>DIRECCION</th>
				<th>HORARIO</th>
				<th>PEDIR CITA</th>
   			</tr>
			@foreach($valores as $valor)
			<tr>
				<td> {{ $valor->nombre }}</td>
				<td> {{ $valor->direccion }}</td>
				<td> {{ $valor->horario }}</td>
				@if (Auth::guest())
				<td> <a href="/login" >Pedir Cita </a></td>
				@else
				<td> <a href="/pedircita/{{$valor->id}}" >Pedir Cita </a></td>
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