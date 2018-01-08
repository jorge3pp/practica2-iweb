<!DOCTYPE html>

@extends('layouts.app')

@section('content')

<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 65vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .define{
                padding-left: 50px;
            }
        </style>
    </head>
    <body>

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


        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    <img src="gcivil.png" width="110px" height="140px" alt="Logo"/>
                    <font color="green">SAFE DATA</font>
                </div>

                <div class="links">
                    @if (Auth::guest())

					    <a href="http://127.0.0.1:8000/cuartelesp">Cuarteles</a>
					
                    @else
                        @if(Auth::user()->email == 'Admin@admin.com')
                            <a href="http://127.0.0.1:8000/agentes">Agentes</a>
                            <a href="http://127.0.0.1:8000/cuarteles">Cuarteles</a>
                            <a href="http://127.0.0.1:8000/denuncias">Denuncias</a>
                            <a href="http://127.0.0.1:8000/tareas">Tareas</a>
                            <a href="http://127.0.0.1:8000/usuarios">Usuarios</a>
                            <a href="http://127.0.0.1:8000/insertar">Insertar datos</a>
                            <a href="http://127.0.0.1:8000/search">Busqueda</a>


                                

                            

                        @else

                            @if(Auth::user()->rol == '2')
                                    <a href="http://127.0.0.1:8000/tareasporagente">Tareas</a>
                                    <a href="http://127.0.0.1:8000/cuartelesporagente">Cuarteles</a>
                                    <a href="http://127.0.0.1:8000/denunciasporagente">Denuncias</a>
                            @else
                                <a href="http://127.0.0.1:8000/cuartelesp">Cuarteles</a>
                                <a href="http://127.0.0.1:8000/denunciasp">Denuncias</a>
                                @endif
                        @endif
                    @endif
                    
                </div>
            </div>
        </div>

        <footer>
            <div class='define'>
                <h5><b>Contacte con nosotros</b></h5>
                <b><a href="https://github.com/pedroUA">Pedro Antonio Moya Garcia</a></b><br>
                <b><a href="https://github.com/jorge3pp">Jorge Poveda </a></b><br>
                <b><a href="https://github.com/jgs86">Jorge Garcia Serrano</a></b><br>
                <b><a href="https://github.com/pala10">Placido Antonio Lopez Avila</a></b>
            </div>
        </footer>   
    </body>
</html>


@endsection