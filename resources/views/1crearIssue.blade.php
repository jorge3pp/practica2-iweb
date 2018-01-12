@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->

	@if (count($errors) > 0)
    <div id="Contenedor" style=" background-color:#F8E0E0; color:black; border-style: solid; border-color:#F6CECE; border-radius: 1em;">
        <b><strong>ERROR</strong> Han habido problemas con los datos introducidos<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul></b>
    </div>
    @endif
	
	<h1 class="title m-b-md" align="left">Insertar datos del Issue a crear</h1>
    <div>
	<form method="POST">
	{{ csrf_field() }}
		<table width="400px" align="left">
			<tr>
                <tr>
                       <td ><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre" placeholder="Introduce el Nombre">
                </tr>
                <tr>
                        
                    <td ><input value="{{ old('descripcion') }}" class="field" type="text" name="descripcion" id="descripcion" placeholder="Introduce la descripción">
                    <!--<td><label>Introduce una descripcion del Issue:</label><textarea name="descripcion" id="descripcion" cols="50" rows="10"></textarea></td> -->
                </tr>
			    
            </tr>
            <tr>
                <td> <input type="submit" value="Crear Issue"></td>
            </tr>
		</table>
	</form>
    </div>


    <div>
       
    </div>
	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection