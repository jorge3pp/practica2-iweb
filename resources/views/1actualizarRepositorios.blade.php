@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->

	<h1 align="center">ACTUALIZAR DATOS REPOSITORIO</h1>
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
	
	<h1 class="title m-b-md" align="left">Selecciona el repositorio a actualizar</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
            <tr>
                <tr>
                    <td align="left"><div class="form-group">
                        <select name="repositorio" id="repositorio" class="form-control">
                            <option value "">--  Escoja uno  --</option>
                            @foreach($valores as $valor)     
                                <option value ="{{$valor->id}}"> {{$valor->nombre}} </option>
                            @endforeach
                        </select> </div>
                    </td>
                </tr>
				<tr>
				
					<td align="left"><div class="form-group">
						<h1 class="title m-b-md" align="left">Selecciona el nuevo Administrador</h1>
                        <select name="administrador" id="administrador" class="form-control">
                            <option value "">--  Escoja uno  --</option>
                            @foreach($usuarios as $valor2)     
                                <option value ="{{$valor2->id}}"> {{$valor2->name}} </option>
                            @endforeach
                        </select> </div>
                    </td>


				</tr>

                
                <input type="submit" value="Modificar valores"></td> 
            </tr>	
            
		</table>  
	</form>

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection