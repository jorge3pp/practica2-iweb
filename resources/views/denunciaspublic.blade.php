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
				<th>NOMBRE</th>
				<th>MOTIVO</th>
				<th>IMPORTE</th>
				<th>PAGAR</th>
   			</tr>
			@foreach($valores as $valor)
				@if($valor->user_id == Auth::user()->email)
					<tr>
						<td> {{ $valor->nombre }} </td>
						<td> {{ $valor->motivo }} </td>
						<td> {{ $valor->importe_multa }}</td>

						@if ($valor->importe_multa == 'Pagada')
							<td> Pagada</td>
							
						@else
							<td><a href="{{action('WebController@pagarDenuncia', $valor->id)}}"> Pagar </a></td>
						@endif
					</tr>
				@endif
			@endforeach
			</table>
		</div>
	

	<!-- FIN Codigo Body de la página web -->


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
