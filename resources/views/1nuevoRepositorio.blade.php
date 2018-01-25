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
	
	<h1 class="title m-b-md" align="left">Creando nuevo repositorio</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
                <tr>
                    <td align="left"><label for="nombre">Nombre del repositorio</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                </tr>
                <tr>
                    <td align="left"><div class="form-group">
                     <label><input type="radio" class="flat" name="acceso" value="0" checked >Privado</label>
                     <label><input type="radio" class="flat" name="acceso" value="1" >Publico</label>
                    </td>
                </tr>
                    <td align="left">
                        <div class="form-group">
                            <select name="lang" id="lang" class="form-control">
                                    <option value ""> Escoja el lenguaje de programacion </option>
                                    @foreach($langs as $valor)   
                                            <option value ="{{$valor->proglang}}"> {{$valor->proglang}} </option>
                                    @endforeach
                            </select>
                        </div>
                     </td>
                <tr>
                    <input type="submit" value="Crear repositorio"></td>
                </tr>
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
