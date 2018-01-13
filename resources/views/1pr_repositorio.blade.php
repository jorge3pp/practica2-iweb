@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->

	<h1 align="center">PULL REQUESTS ABIERTOS</h1>
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

    <div class="container">
			{{$valores->links()}}
	</div>

    <div class="container">
        <h1></h1>
        <table class="table table-striped">

            @if(count($valores) <= 0)
                <h1>NO HAY PULL REQUESTS CREADOS </h1>
            @else
                @foreach($valores as $valor)
                    
                    @if($valor->estado == 'abierto')
                    <tr>
                   
                        <td><a> {{ $valor->nombre }}</a> </td>
                            <td><a href="{{action('WebController@detallesIssue', $valor->id)}}"> Ver detalles </a></td>
                            <td><a href="{{action('WebController@cerrarIssue', $valor->id)}}"> Cerrar Pull Request </a></td>
                    </tr>
                   @endif

                @endforeach
            @endif
        </table>
    </div>


		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection