@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->

	<h1 align="center">ISSUES ABIERTOS</h1>
    <nav class="navbar navbar-default navbar-inverse container">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Barra de navegacion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

							@if (Auth::guest())

							@else
								<li><a href="#">Abiertos</a></li>
								<li><a href="{{action('WebController@issueRepositorioCerrados',$repositorio->id)}}">Cerrados</a></li>
                            	<li><a href="{{action('WebController@crearIssue', $repositorio->id)}}">Crear Issue</a></li>
							@endif

                        
						
					</ul>

                    <ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="/repositoriosp">VOLVER A LA PAGINA DE REPOSITORIOS DESTACADOS</a></li>
						@else
							<li><a href="{{action('WebController@datosRepositorio', $repositorio->id)}}">VOLVER A LA PAGINA PRINCIPAL DEL REPOSITORIO</a></li>
						@endif
                    
					</ul>
			</div>
		</div>
	</nav>

    <div class="container">
			{{$valores->links()}}
	</div>

    <div class="container">
        <table class="table table-striped">

            @if(count($valores) < 1)
                <h1>NO HAY ISSUES CREADOS</h1>
                
            @else
                @foreach($valores as $valor)
                    
                    @if($valor->estado == 'abierto')
                    <tr>
                   
                        <td> {{ $valor->nombre }} </td>
							@if (Auth::guest())

							@else
                            <td><a href="{{action('WebController@detallesIssue', $valor->id)}}"> Ver detalles </a></td>
                            <td><a href="{{action('WebController@cerrarIssue', $valor->id)}}"> Cerrar Issue </a></td>
							@endif
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