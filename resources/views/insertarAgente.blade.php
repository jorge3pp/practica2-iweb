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
	
	<h1 class="title m-b-md" align="left">Insertar datos de Agente</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			
			<tr>
			    <tr>
				    <td align="left"><label for="id">ID de la placa</label><input value="{{ old('id') }}" type="text" name="id" id="id">
                </tr>

                    <tr>
                        <td align="left"><label for="nombre">Nombre del agente</label><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre">
                    </tr>
                   <tr>
            <td align="left"><div class="form-group">


            <label for="">Cuartel</label>
            <select name="cuartel" id="cuartel" class="form-control">
                <option value "">--Escoja el cuartel--</option>
                @foreach($valores as $valor)       
                    <option value ="{{$valor->id}}"> {{$valor->nombre}} </option>
                @endforeach
            </select> </div></td></tr>
                  
            <tr> <td align="left"><div class="form-group">
            <label for="">Usuario</label>
            <select name="usuario_id" id="usuario_id" class="form-control">
                <option value "">--Escoja el cuartel--</option>
                @foreach($valors as $valora)       
                    <option value ="{{$valora->email}}"> {{$valora->name}} </option>
                @endforeach
            </select>
        </div></td></tr>
				<input type="submit" value="Insertar agente"></td>
			    
            </tr>
            
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection
