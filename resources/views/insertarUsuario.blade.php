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
	
	<h1 class="title m-b-md" align="left">Insertar datos de Usuario</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
					<tr>
                        <td align="left"><label for="email">Email</label><input value="{{ old('email') }}" type="text" name="email" id="email">
                    </tr>
					<tr>
                        <td align="left"><label for="dni">DNI</label><input value="{{ old('dni') }}" type="text" name="dni" id="dni">
                    </tr>
                    <tr>
                        <td align="left"><label for="nombre">Nombre del usuario</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                    </tr>
					<tr>
                        <td align="left"><label for="direccion">Direccion del usuario</label><input value="{{ old('direccion') }}" type="text" name="direccion"s id="direccion">
                    </tr>
					<tr>
                        <td align="left"><label for="telefono">Telefono del usuario</label><input value="{{ old('telefono') }}" type="text" name="telefono" id="telefono">
                    </tr>

					<tr>
				    <td align="left"><label for="pass">Contraseña</label><input value="{{ old('pass') }}" type="text" name="pass" id="pass">
                	</tr>

				<input type="submit" value="Insertar usuario"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
