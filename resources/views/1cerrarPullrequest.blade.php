@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->

	<h1 align="center">CERRAR PULL REQUEST</h1>
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
						@if(count($valores) > 0)
							<li><a href="#">Abiertos</a></li>
						    <li><a href="{{action('WebController@pullrequestRepositorioCerrados', $valores->get(0)->id_repo)}}">Cerrados</a></li>
                            <li><a href="{{action('WebController@crearPullrequest', $valores->get(0)->id_repo)}}">Crear Pull Request</a></li>
                        @endif

                        
						
					</ul>

                    <ul class="nav navbar-nav navbar-right">
					@if(count($valores) > 0)
						<li><a href="{{action('WebController@datosRepositorio', $valores->get(0)->id_repo)}}">VOLVER A LA PAGINA PRINCIPAL DEL REPOSITORIO</a></li>
                    @endif
                    
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
	
	<h1 class="title m-b-md" align="left">Puede cerrar un Issue con este PR</h1>

	<form method="POST">
	{{ csrf_field() }}
		<table width="600px" align="left">
            <tr>
                <tr>
                    <td align="left"><div class="form-group">
                        <label for="">Selecciona el Issue a cerrar (opcional)</label>
                        <select name="issue" id="issue" class="form-control">
                            <option value "">--  Ninguno  --</option>
                            @foreach($issues as $valor) 
                                @if($valor->id_usuario == Auth::user()->id && $valor->estado == 'abierto')      
                                    <option value ="{{$valor->id}}"> {{$valor->nombre}} </option>
                                @endif
                            @endforeach
                        </select> </div>
                    </td>
                </tr>

                
                <input type="submit" value="Cerrar Pull Request"></td> 
            </tr>	
            
		</table>  
	</form>

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection