@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de Usuario</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando usuario con ID: {{$valores}}</td>

                    <tr>
                        <td align="left"><label for="name">Nombre del usuario</label><input type="text" name="name" id="name">
                    </tr>
                    <tr>
                        <td align="left"><label for="telefono">Telefono del usuario</label><input type="text" name="telefono" id="telefono">
                    </tr>
                    <tr>
                        <td align="left"><label for="direccion">Direccion del usuario</label><input type="text" name="direccion" id="direccion">
                    </tr>

				<input type="submit" value="Modificar usuario"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection