@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center"></h1>

	<div class="container">
			{{$valores->links()}}
	</div>

	<div class="container">
	<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>PROVINCIA</th>
				<th>DIRECCION</th>
   			</tr>
			@foreach($valores as $valor)
			<tr>
				<td> {{ $valor->id }} </td>
				<td> {{ $valor->nombre }} </a></td>
				<td> {{ $valor->direccion }} </td>

			</tr>
			@endforeach
			</table>
	</div>			
		
	<!-- FIN Codigo Body de la página web -->




	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection