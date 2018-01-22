@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
    <h1 align="center">El código del repositorio</h1>
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


                    <ul class="nav navbar-nav navbar-right">
						<li><a href="{{action('WebController@datosRepositorio', $valor)}}">VOLVER A LA PAGINA PRINCIPAL DEL REPOSITORIO</a></li>

                    
				    </ul>
			</div>
		</div>
	</nav>

    <div id="codigo" style="width: 1200px; position: relative; left: 50px; border-width: 2px; border-radius: 1em; border-color:blue; color:black; border-style: solid;">

    
        <div  id="codigo" style="position: relative; left: 30px;">
            
            <?php
            try {
                $public_path = public_path();
                $url = $public_path.'/storage/images/'.$valor;
                //$url = $public_path.'/storage/images/1';
                $texto = file_get_contents($url); 
                $texto = nl2br($texto); 
                echo $texto;
            }
            catch(\Exception $e) {
                echo "No se ha subido todavia el código";
            }
                
            ?> 


        </div>
    </div>
	
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection