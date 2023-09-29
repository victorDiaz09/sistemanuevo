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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
        }

        .fondo {
            margin-top: 0; /* Ajusta la distancia superior que deseas */
            width: 100%;
            height: 100vh;
            background-image: url("{{ asset('img-inicio/vehiculocarga.jpeg') }}");
            background-size: cover;
        }

        h1 {
            text-align: center;
            font-size: 42px;
            color: purple;
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

   
        .container {
            width: 50%;
            max-width: 350px;
            min-width: 300px;
            background: white;
            padding: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px; /* Ajusta el ancho del formulario según tus necesidades */

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
            font-weight: bold;
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
            font-style: italic;
            font-size: 20px;
            font-weight: 500;
            color: rgb(156, 156, 156);
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
        background-color: #fff;
        border-radius: 8px !important;
    }

    .login-card-body {
        border-radius: 8px !important;
    }

    .input-group-text {
        border: 1px solid black;

    }

    .form-control {
        border: 1px solid black;
    }
    

    </style>


</head>

<body>
<div class="fondo">
<div class="login-box">
        <div class="card log log-div">
            <div class="card-body login-card-body">
                <div style="border-bottom: 5px !important; display: flex; justify-content: center;">
                    <img src="../img/av.png" alt="" class="img-responsive log" width="275" height="150">
                </div>

                <!-- este if, ingresa mensaje de error si las credenciales son null --->

                <div id="error-message" class="alert alert-danger">

                    <button id="close-error" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-person-circle"></span>
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="cambioss" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-shield-slash-fill text-success" onclick="show_hide_passwordsss()"
                                    id="pass2_"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select name="sucursal" id="sucursal" class="form-control">
                            <option value="" disabled selected>Seleccione sucursal</option>
                            <option value="value1">Sucursal 1</option>
                            <option value="value2">Sucursal 2</option>
                            <option value="value3">Sucursal 3</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-building-fill-check"></span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" name="enviar" class="form-control" value="si">
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block">INICIAR SESIÓN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
   
</body>

</html>
