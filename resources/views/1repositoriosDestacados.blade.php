@extends('layouts.app')

@section('content')



	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Repositorios destacados</h1>

    <div class="container">
    {{$valores->links()}}
    </div>

    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>NOMBRE</th>
                <th>AUTOR</th>
                <th>ESTRELLAS</th>

            </tr>
            @foreach($valores as $valor)
                
            <tr>
                <td><a href="{{action('WebController@datosRepositorio', $valor->id)}}"> {{ $valor->nombre }}</a> </td>
                <td> {{ $valor->administrador }} </td>
                <td> {{ $valor->estrellas }} </td>    
            </tr> 

            @endforeach
        </table>
    </div>

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection