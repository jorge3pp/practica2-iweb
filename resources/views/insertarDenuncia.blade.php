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
	
	<h1 class="title m-b-md" align="left">Insertar datos de Denuncia</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
				<td><br><h3>Introduce los datos de la denuncia</td>

                    <tr>
                        <td align="left"><label for="nombre">Tipo de denuncia</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                    </tr>
                    <tr>
                        <td align="left"><label for="motivo">Motivo de la denuncia</label><input value="{{ old('motivo') }}" type="text" name="motivo" id="motivo">
                    </tr>
                    <tr>
                        <td align="left"><label for="importe">Importe de la denuncia</label><input value="{{ old('importe') }}" type="text" name="importe" id="importe">
                    </tr>
            <tr>
                <td align="left"><div class="form-group">


            <label for="">Usuario</label>
            <select name="usuario" id="usuario" class="form-control">
                <option value "">--Escoja el usuario--</option>
                @foreach($valores as $valor)       
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

				<input type="submit" value="Insertar denuncia"></td>
			    
            </tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection