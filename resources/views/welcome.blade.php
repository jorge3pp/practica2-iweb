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
                    <img src="icono.png" width="140px" height="140px" alt="Logo"/>
                    <font color="green">NOESGITHUB</font>
                </div>

                <div class="links">
                    @if (Auth::guest())

					    <a href="http://127.0.0.1:8000/repositoriosp">Repositorios destacados</a>
					
                    @else
                        @if(Auth::user()->email == 'Admin@admin.com')

                        @else
                            <a href="http://127.0.0.1:8000/repositoriosp">Repositorios destacados</a>
                            <a href="http://127.0.0.1:8000/repositorios">Mis repositorios</a>
                            
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
            </div>
        </footer>   
    </body>
</html>


@endsection