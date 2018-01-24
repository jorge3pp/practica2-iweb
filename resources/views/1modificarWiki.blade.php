@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de la Wiki</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando Wiki del repositorio: {{$repo->nombre}}</td>

                    <tr>
                        <td align="left"><label for="milestone">Milestone actual</label><input type="text" name="milestone" id="milestone">
                    </tr>
                    <tr>
                        <td align="left"><label for="contenido">Contenido</label><input type="text" name="contenido" id="contenido">
                    </tr>
				<input type="submit" value="Modificar wiki"></td>
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection