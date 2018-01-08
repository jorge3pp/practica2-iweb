@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->

    @if (count($errors) > 0)
    <div id="Contenedor" style=" background-color:#F8E0E0; color:black; border-style: solid; border-color:#F6CECE; border-radius: 1em;">
        <b><strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul></b>
    </div>
    @endif
	<h1 class="title m-b-md" align="left">Estos son los resultados de busqueda específica</h1>

    <form method="GET" action="http://127.0.0.1:8000/especial">
        <font size=4><b>Selecciona el campo sobre el que deseas buscar</b></font><br>
        <table width="800px" align="left">
            <tr>
                <td width="50%"><input checked="checked" class="field" name="res" type="radio" value="1"><font size=5>Usuarios</font><br>
                <input class="field" name="res" type="radio" value="2"><font size=5>Agentes</font><br>
                <input class="field" name="res" type="radio" value="3"><font size=5>Cuarteles</font><br>
                <input class="field" name="res" type="radio" value="4"><font size=5>Denuncias</font><br>
                <input class="field" name="res" type="radio" value="5"><font size=5>Tareas</font></td>
            </tr>
            <tr>
                <td><br><h3>Introduce el nombre o descripción del elemento que deseas buscar</td>
            </tr>
            <tr>
                <td align="center"><input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre" placeholder="Nombre">
				<input value="{{ old('id2') }}" type="text" name="id" id="id" placeholder="Id">
                <input type="submit" value="Search"></td>
            </tr>
		</table>
    </form>

    

	<!-- FIN Codigo Body de la página web -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection