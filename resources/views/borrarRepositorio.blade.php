@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center">Borrar repositorio</h1>
	<nav class="navbar navbar-default navbar-inverse container">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Barra de navegacion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<!--<a class="navbar-brand" href="/">Inicio</a>-->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
		
				</ul>

                <ul class="nav navbar-nav navbar-right">
					<li><a href="/modificarrepositorios">VOLVER A LA PAGINA DE MODIFICAR REPOSITORIOS</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

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
	</div>

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection