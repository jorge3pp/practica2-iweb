@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->
	
	<h1 class="title m-b-md" align="center">El agente: {{ $valores->nombre }} </h1>
    <div> <h3 align="center">Numero de Placa: {{ $valores->id }} </h3></div>
	<div> <h3 align="center">Nombre del cuartel: {{ $valora->nombre }}</h3></div>
	<div> <h3 align="center">DNI del agente: {{ $valors->DNI }}</h3></div>
	<div> <h3 align="center">Email del agente: {{ $valors->email }}</h3></div>
	<div> <h3 align="center">Direccion del agente: {{ $valors->direccion }}</h3></div>
	<div> <h3 align="center">Telefono del agente: {{ $valors->telefono }}</h3></div>
	

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection