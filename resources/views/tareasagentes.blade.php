@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<div class="container">
	<h1 class="title m-b-md" align="centre"> AGENTES ASIGNADOS</h1>

        
		<table class="table table-striped">
			<tr>
				<th>ID</th>
                <th>NOMBRE</th>
   			</tr>
			@foreach($valores as $valor)
				<tr>
					<td> {{ $valor->id }} </td>
                    <td> {{ $valor->nombre }} </td>
				</tr>
			@endforeach
		</table>
		</div>
   
	
	

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection