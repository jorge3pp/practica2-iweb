@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->

    <div id="perfil" style="width: 900px; position: relative; left: 50px; border-width: 2px; border-radius: 1em; border-color:#007f00; color:black; border-style: solid;">

    
    <div id="perfil" style="position: relative; left: 30px;">
    <h1><b>{{Auth::user()->name}}</b></h1><br>
    
    <?php
        if(empty(Auth::user()->imagen)){
            print '<img src="/../unknown.png" width="200" height="200" border="3">';
        }else{
            $img = Auth::user()->imagen;
            print '<img src="/storage/images/';
            $imagen = Auth::user()->imagen;
            print "$imagen";
            print '" width="200" height="200" border="3">';
        }
    ?>

    <form method="POST" action="/profile/storage_img" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <br>
            <div id="perfil" style="position: relative; width: 400px; height: 50px;">
            <input type="file" class="form-control" name="file">
            </div>
            <button align="center" type="submit" class="btn btn-primary">Enviar</button>
            <div class='text-danger'>{{$errors->first('file')}}</div>
    </form>

    <h3 align="left">Datos personales:</h3>

    <h4 align="left">Email: {{ Auth::user()->email }}</h4>
    <h4 align="left">DNI: {{ Auth::user()->DNI }}</h4>
    <h4 align="left">Dirección: {{ Auth::user()->direccion }}</h4>
    <h4 align="left">Telefono: {{ Auth::user()->telefono }}</h4>

    <?php
        if(Auth::user()->email == 'Admin@admin.com'){
            print '<h4 align="left">Tipo de cuenta: Administrador</h4>';
        }
        elseif(Auth::user()->rol == 1 || empty(Auth::user()->rol)){
            print '<h4 align="left">Tipo de cuenta: Usuario</h4>';
        }else{
            print '<h4 align="left">Tipo de cuenta: Agente</h4>';
        }
    ?>

    <a href="/citasp"><b>Administrar mis citas</b></a>
    </div>
    </div>
	
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@endsection