@extends('layouts.app')

@section('content')
	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Modificar datos de Denuncia</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Modificando denuncia con ID: {{$valores}}</td>
			    
                    <tr>
                        <td align="left"><label for="nombre">Nombre de la denuncia</label><input type="text" name="nombre" id="nombre">
                    </tr>
                    <tr>
                        <td align="left"><label for="motivo">Motivo de la denuncia</label><input type="text" name="motivo" id="motivo">
                    </tr>
					 <tr>
                <td align="left"><div class="form-group">


            <label for="">Usuario denunciado</label>
            <select name="usuario" id="usuario" class="form-control">
                <option value "">--Escoja el usuario--</option>
                @foreach($vales as $valor)       
                    <option value ="{{$valor->email}}"> {{$valor->name}} </option>
                @endforeach
            </select></div></td></tr>
                    <tr>
                <td align="left"><div class="form-group">   
            <label for="">Agente que rellena la denuncia</label>
            <select name="agente" id="agente" class="form-control">
                <option value "">--Escoja el agente--</option>
                @foreach($valors as $valora)       
                    <option value ="{{$valora->id}}"> {{$valora->nombre}} </option>
                @endforeach
            </select></div></td></tr>

				<input type="submit" value="Modificar denuncia"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection