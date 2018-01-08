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
	
	<h1 class="title m-b-md" align="left">Insertar datos de Tarea</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
	
			<tr>
                <tr>
                       <td align="left"><label for="nombre">Nombre de la tarea</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                </tr>
                <tr>
                        <td align="left"><label for="zona">Zona de la tarea</label><input value="{{ old('zona') }}" type="text" name="zona" id="zona">
                    </tr>
                    <tr>
                        <td align="left"><label for="descripcion">Descripcion de la tarea</label><input value="{{ old('descripcion') }}" type="text" name="descripcion" id="descripcion">
                    </tr>
                <tr> 
                    <td align="left">
                    <div class="form-group">
                     <label for="">Agente</label>
                        <select name="agente_id" id="agente_id" class="form-control">
                             <option value "">--Escoja el agente--</option>
                             @foreach($valores as $valor)       
                                  <option value ="{{$valor->id}}"> {{$valor->nombre}} </option>
                            @endforeach
                         </select>
                    </div>
                </td></tr>
                    

				<input type="submit" value="Insertar tarea"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection