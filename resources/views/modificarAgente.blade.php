@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de Agente</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando agente con ID: {{$valores}}</td>

                    <tr>
                        <td align="left"><label for="nombre">Nombre del agente</label><input type="text" name="nombre" id="nombre">
                    </tr>
                    <tr>
                        <td align="left"><label for="cuartel">Cuartel del agente</label><input type="text" name="cuartel" id="cuartel">
                    </tr>
				<input type="submit" value="Modificar agente"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection
