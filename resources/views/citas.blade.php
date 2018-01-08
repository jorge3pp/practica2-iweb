@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center">Lista de citas pendientes</h1>

	<div class="container">
			{{$valores->links()}}
	</div>

	<div class="container">
	<table class="table table-striped">
			<tr>
				<th>MOTIVO</th>
				<th>HORARIO</th>
				<th>CANCELAR</th>
   			</tr>
			@foreach($valores as $valor)
			<tr>
				<td> {{$valor->motivo}} </td>
				<td> {{ $valor->h_cita }}</td>
				@if (Auth::guest())
				<td> <a href="/login" >Pedir Cita </a></td>
				@else
					@if(Auth::user()->cita != 0)
						<td> <a href="/cancelarCita/{{$valor->id}}" >Cancelar cita </a></td>
					@else
						<td> </td>
					@endif
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