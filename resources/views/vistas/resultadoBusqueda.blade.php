<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
    <style>
        /* Estilos CSS */

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            border: none;
            height: 100vh;
            overflow: hidden;
        }

        .fondo {
            height: 100vh;
            background-image: url("{{ asset('img-inicio/fondo.jpg') }}");
            background-size: cover;
        }

        .ticket {
            width: 550px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin: 0px auto;
            padding: 20px;
            height: 95vh;
            overflow: scroll;
            background: rgba(255, 255, 255, 0.9);
        }

        h1 {
            font-size: 38px;
            margin: 0;
            text-align: center;
            padding: 25px;
        }

        h2 {
            font-size: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
        }

        .ticket-info {
            display: flex;
            justify-content: space-between;
        }

        .ticket-info p {
            margin: 0
        }

        hr {
            color: rgb(199, 198, 198);
        }

        .verde {
            background: green;
            padding: 10px 8px;
            color: white;
        }

        .rojo {
            background: rgb(238, 24, 0);
            padding: 10px 8px;
            color: white;
        }

        .azul {
            background: rgb(0, 69, 207);
            padding: 10px 8px;
            color: white;
        }

        .naranja {
            background: rgb(237, 114, 0);
            padding: 10px 8px;
            color: white;
        }

        .ticket-info {
            text-align: center;
            margin-top: 20px;
        }

        .numero {
            background: black;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
        }

        .descarga {
            background: rgb(81, 81, 81);
            padding: 8px 20px;
            color: white;
            text-decoration: none;
        }

        @media screen and (max-width:640px) {
            .ticket {
                width: 80%;
                overflow: scroll;
            }
        }
    </style>
</head>

<body>
    <div class="fondo">
        @foreach ($datos as $datos)
            <div class="ticket">
                <a href="{{ route('welcome') }}" class="descarga">Volver</a>
                @foreach ($empresa as $item)
                    <h1>{{ $item->nombre }}</h1>
                    <a class="numero">Ticket N° {{ $datos->numero_reg }}</a>
                    <hr>
                    {{-- <h2>DATOS DE LA EMPRESA</h2>
                    <p><strong>Ubicacion:</strong> {{ $item->ubicacion }}</p>
                    <p><strong>Teléfono:</strong> {{ $item->telefono }}</p>
                    <p><strong>Correo:</strong> {{ $item->correo }}</p> --}}
                @endforeach
                <hr>
                <h2>DATOS DEL REMITENTE</h2>
                <p><strong>DNI:</strong> {{ $datos->dniRemitente }}</p>
                <p><strong>Nombre / Razon Social:</strong> {{ $datos->nomRemitente }}</p>
                <p><strong>Teléfono:</strong> {{ $datos->remitenteTelefono }}</p>
                <p><strong>Dirección:</strong> {{ $datos->remitenteDireccion }}</p>
                <hr>
                <h2>DATOS DEL CONSIGNATARIO</h2>
                <p><strong>DNI:</strong> {{ $datos->dniReceptor }}</p>
                <p><strong>Nombre / Razon Social:</strong> {{ $datos->nomReceptor }}</p>
                <p><strong>Teléfono:</strong> {{ $datos->receptorTelefono }}</p>
                <p><strong>Dirección:</strong> {{ $datos->receptorDireccion }}</p>
                <hr>
                <h2>LUGAR DE PARTIDA / LLEGADA</h2>
                <p><strong>Lugar de partida:</strong>
                    {{ $datos->desde_distrito_nombre . ' - ' . $datos->desde_provincia_nombre . ' - ' . $datos->desde_departamento_nombre . ' - ' . $datos->desde_direccion }}
                </p>
                <p><strong>Lugar de llegada:</strong>
                    {{ $datos->hasta_distrito_nombre . ' - ' . $datos->hasta_provincia_nombre . ' - ' . $datos->hasta_departamento_nombre . ' - ' . $datos->hasta_direccion }}
                </p>
                <hr>
                <h2>DATOS DEL ENVÍO</h2>
                <p><strong>Cantidad:</strong> {{ $datos->cantidad }}</p>
                <p><strong>Precio:</strong> {{ $datos->precio }}</p>
                <p><strong>Estado de pago:</strong>
                    @if ($datos->pago_estado == 1)
                        <a class="verde">PAGADO</a>
                    @else
                        <a class="rojo">NO PAGADO</a>
                    @endif
                </p>
                <p><strong>Fecha de envío:</strong> {{ $datos->fecha_salida }}</p>
                <p><strong>Fecha de recojo:</strong> {{ $datos->fecha_recojo }}</p>
                <p><strong>Estado de Envío:</strong>
                    @if ($datos->envio_estado == 1)
                        <a class="azul">{{ strtoupper($datos->nombre) }}</a>
                    @else
                        @if ($datos->envio_estado == 2)
                            <a class="naranja">{{ strtoupper($datos->nombre) }}</a>
                        @else
                            @if ($datos->envio_estado == 3)
                                <a class="verde">{{ strtoupper($datos->nombre) }}</a>
                            @endif
                        @endif
                    @endif
                </p>
                <p><strong>Descripcion:</strong> {{ $datos->descripcion }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
