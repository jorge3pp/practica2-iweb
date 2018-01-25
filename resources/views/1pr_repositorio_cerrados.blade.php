@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	<h1 align="center">PULL REQUESTS CERRADOS</h1>
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
						<li><a href="{{action('WebController@pullrequestRepositorio', $repo->id)}}">Abiertos</a></li>
						<li><a href="#">Cerrados</a></li>
						<li><a href="{{action('WebController@crearPullrequest', $repo->id)}}">Crear Pull Request</a></li>
					</ul>
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="{{action('WebController@datosRepositorio', $repo->id)}}">VOLVER A LA PAGINA PRINCIPAL DEL REPOSITORIO</a></li>
					</ul>
			</div>
		</div>
	</nav>

    <div class="container">
			{{$valores->links()}}
	</div>

    <div class="container">
    <table class="table table-striped">

        @if(count($valores) <= 0)
            <h1>NO HAY PULLS REQUESTS </h1>
        @else

            @foreach($valores as $valor)
            @if($valor->estado == 'cerrado')
				<tr>
					<td> {{ $valor->nombre }} </td>
					<td><a href="{{action('WebController@detallesPullrequestCerrado', $valor->id)}}"> Ver detalles </a></td>
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