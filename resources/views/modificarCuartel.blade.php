@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de Cuartel</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando cuartel con ID: {{$valores}}</td>
					
                    <tr>
                        <td align="left"><label for="nombre">Nombre del cuartel</label><input type="text" name="nombre" id="nombre">
                    </tr>
					<tr>
                        <td align="left"><label for="nombre">Direccion del cuartel</label><input type="text" name="direccion" id="direccion">
                    </tr>
					<tr>
                        <td align="left"><label for="horario">Horario del cuartel</label><input value="{{ old('horario') }}" type="text" name="horario" id="horario">
                    </tr>
				<input type="submit" value="Modificar cuartel"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


@endsection
