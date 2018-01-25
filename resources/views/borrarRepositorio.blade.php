@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="left">Borrar repositorio</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
			<tr>
				<td>
					<div class="form-group">
                            <select name="repo" id="repo" class="form-control">
                                    <option value ""> Escoja el repositorio a borrar </option>
                                    @foreach($repositorios as $valor)   
                                            <option value ="{{$valor->id}}"> {{$valor->nombre}} </option>
                                    @endforeach
                            </select>
                        </div>
				</td>
			</tr>
			<tr>
				<input type="submit" value="Borrar repositorio"></td>
			</tr>
		</table>
	</form>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection