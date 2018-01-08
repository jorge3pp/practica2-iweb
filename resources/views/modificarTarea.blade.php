@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de Tarea</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando tarea con ID: {{$valores}}</td>
                    <tr>
                        <td align="left"><label for="nombre">Nombre de la tarea</label><input type="text" name="nombre" id="nombre">
                    </tr>
                    <tr>
                <td align="left"><div class="form-group">   
            <label for="">Agente que debe realizar la tarea</label>
            <select name="agente_id" id="agente_id" class="form-control">
                <option value "">--Escoja el agente--</option>
                @foreach($valors as $valora)       
                    <option value ="{{$valora->id}}"> {{$valora->nombre}} </option>
                @endforeach
            </select></div></td></tr>
                    <tr>
                        <td align="left"><label for="zona">Zona de la tarea</label><input type="text" name="zona" id="zona">
                    </tr>
                    <tr>
                        <td align="left"><label for="descripcion">Descripcion de la tarea</label><input type="text" name="descripcion" id="descripcion">
                    </tr>

				<input type="submit" value="Modificar tarea"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


@endsection