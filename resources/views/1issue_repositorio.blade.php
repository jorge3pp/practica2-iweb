@extends('layouts.dentro_repositorio')
@extends('layouts.app')
@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Detalles del repositorio</h1>

        <div class="container">
            <h1>Nombre: {{ $valor->nombre }}</h1>

            @if($valor->privPub == '0')
            <p>Tipo de repositorio: PRIVADO</p>

            @else
            <p>Tipo de repositorio: PÚBLICO</p>
            @endif
            
            <pre class ="container">
                Estrellas del repositorio: {{ $valor->estrellas }}
                Contador seguidores: {{$valor->contador_seguidores}}
            </pre>
            <p><a>Modificar los datos u otra cosa</a></p>
        </div>


		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection