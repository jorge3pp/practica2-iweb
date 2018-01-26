@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->	
	@if (Auth::user()->email == 'Admin@admin.com')
    <h1 align="center">Bienvenido a la intezfaz de Administración</h1>

    @else
        <h1 class="title m-b-md" align="center">Lista de Commits de: {{ $repo->nombre }} </h1>

        <nav class="navbar navbar-default navbar-inverse container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{action('WebController@datosRepositorio', $repo->id)}}">VOLVER A LA PAGINA PRINCIPAL DEL REPOSITORIO</a></li>
                </ul>
            </div>
        </nav>
            <div class="container">
                {{$valores->links()}}
            </div>
            @if(count($valores) > 0)
                <div class="container">
                    <h1>Commits</h1>
                    <table class="table table-striped">
                        <tr>
                            <th>Nombre del commit</th>
                            <th>Descripcion</th>
                            <th>Usuario</th>
                            <!-- <th>Descarga</th> -->
                        </tr>    

                        @foreach($valores as $valor)

                            
                        <tr>
                            <td> {{ $valor->nombre }} </td>
                            <td> {{ $valor->cambios }} </td>
                            @foreach ($users as $user)
                                @if($valor->id_usuario == $user->id)
                                    <td> {{ $user->name }} </td>  
                                @endif
                            @endforeach
                            <!-- <td><a href="/repositorios/{{$valor->id}}/storage/descargararchivo/{{$valor->id}}"> Descarga </a></td> -->
                        </tr> 

                        @endforeach
                    </table>
                </div>
            @else
                <h1 align="center"> Este repositorio no tiene ningun commit</h1>
            @endif
    @endif

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection