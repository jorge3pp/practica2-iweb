@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">METODO ONLINE DE PAGO</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>TOTAL A PAGAR: {{$valores}} €</td>
                    <tr>
                        <td align="left"><label for="iban">Introduce tu numero de cuenta: </label><input type="text" name="iban" id="iban">
                    </tr>

				<input type="submit" value="Pagar"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


@endsection