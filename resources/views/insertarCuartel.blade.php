@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->

	@if (count($errors) > 0)
    <div id="Contenedor" style=" background-color:#F8E0E0; color:black; border-style: solid; border-color:#F6CECE; border-radius: 1em;">
        <b><strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul></b>
    </div>
    @endif
	
	<h1 class="title m-b-md" align="left">Insertar datos de Cuartel</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Introduce los datos del cuartel que deseas insertar</td>
                    <tr>
                        <td align="left"><label for="nombre">Nombre del cuartel</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                    </tr>
				
					<tr>
                        <td align="left"><label for="direccion">Direccion del cuartel</label><input value="{{ old('direccion') }}" type="text" name="direccion" id="direccion">
                    </tr>

					<tr>
                        <td align="left"><label for="horario">Horario del cuartel</label><input value="{{ old('horario') }}" type="text" name="horario" id="horario">
                    </tr>
				<input type="submit" value="Insertar cuartel"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
