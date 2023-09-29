<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>
    <link rel="shortcut icon" href="{{ asset("foto/empresa/$foto") }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    * h1 {
        text-align: center;
        font-size: 42px;
        color: #A39EEA;
        padding: 10px;
        font-weight: bold;
    }


    .s {
        text-align: center;
        font-size: 25px;
        color: black;
        padding: 10px;
        font-weight: bold;

    }



    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 300px;
        /* Ajusta el ancho del formulario según tus necesidades */

    }

    input {
        padding: 20px;
        outline: none;
        font-size: 20px;
        font-style: italic;
    }

    input:focus {
        font-style: normal;
        font-weight: 500;
    }

    .entrada,
    .salida {
        padding: 17px 10px;
        outline: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        width: 100%;
        text-decoration: none;
        text-align: center;
        border-radius: 35px;

    }

    .entrada {
        background: rgb(0, 119, 199);

    }


    .entrada:hover {
        background: rgb(1, 99, 164);
    }

    p {
        text-align: center;
        font-size: 23px;
        font-weight: 500;
        color: rgb(190, 190, 190);
        margin-bottom: 0;
        margin-top: 0;
    }

    .login {
        font-style: oblique;
        font-size: 25px;
        font-weight: 500;
        color: #000000;
        text-align: center;
    }

    .group__button {
        width: 100%;
        padding: 0;
        display: flex;

    }

    .marca {
        width: 100%;
        margin: 0;
        background: rgb(13, 39, 48);
        position: fixed;
        bottom: 0;
        z-index: 999;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .marca__texto {
        color: rgb(0, 162, 255);
        text-decoration: underline;
    }


    .error {
        color: red;
        font-size: 18px;
    }

    @media screen and (max-width:400px) {
        div.container {
            width: 100%;
            min-width: 100%;
        }
    }

    .log-div {
        background-color: #9EB7EA;
        border-radius: 15px !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-card-body {
        border-radius: 0px !important;
        justify-content: center;
        align-items: center;
    }

    .input-group-text {
        border: 5px solid black;


    }

    .form-control {
        border: 1px solid black;

    }
    </style>
    <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('inicio/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">
    <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
    <title>Inicio de sesión</title>

</head>

<body>

    <img class="wave" src="{{ asset('img-inicio/camiones.webp') }}">
    <div class="container-fluid">
    <div class="row">

    <div class="container" style="position: absolute; left: 75%; top: 7%;">

        <div class="login-content">


            <form action="{{ route('buscar.buscarEnvioCliente') }}" method="get">
                @foreach ($empresa as $item)
                <h1>{{ $item->nombre }}</h1>
                @endforeach
                @csrf
                <img style="width: 60%;" src="{{ asset('img-inicio/LOGO.png') }}">

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input required id="numero" autofocus type="text" name="numero"
                            placeholder="Número de ticket / registro" title="ingrese su codigo">
                        @error('numero')
                        <p class="error">Ingrese su Número de Ticket / Registro</p>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <a class="font-italic isai5" href="{{ route('home') }}">Iniciar Sesion</a>
                </div>

                <input name="entrada" class="btn" title="click para ingresar" type="submit" value="BUSCAR" id="entrada">

                @if (session('INCORRECTO'))
                <div class="alert alert-danger">{{ session('INCORRECTO') }}</div>
                @endif
                {{-- login --}}
            </form>
        </div>
    </div>
    </div>
</div>
</body>

</html>