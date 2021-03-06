@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->

	<h1 align="center">DETALLES DEL PULL REQUEST</h1>
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
						<li><a href="{{action('WebController@pullrequestRepositorio', $valor->id_repo)}}">VOLVER A LA PAGINA DE LOS PULL REQUEST</a></li>
				</ul>
			</div>
		</div>
	</nav>

    <div class="container">


        <h2> Nombre: {{ $valor->nombre }} </h2>
        <h3>Descripcion del Pull Request: {{$valor->descripcion}} </h3>
        <b> Estado del Pull Request: {{$valor->estado}} </b>

 

    </div>


		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection