<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $destino['titulo'] }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            color: #263238;
        }

        header {
            background: linear-gradient(135deg, #00695c, #26a69a);
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        .contenedor {
            max-width: 800px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .detalle {
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #00695c;
            margin-top: 0;
        }

        .dato {
            padding: 15px 0;
            border-bottom: 1px solid #eeeeee;
        }

        .etiqueta {
            font-weight: bold;
            color: #455a64;
        }

        .categoria {
            display: inline-block;
            background-color: #e0f2f1;
            color: #00695c;
            padding: 7px 14px;
            border-radius: 20px;
        }

        .boton {
            display: inline-block;
            margin-top: 25px;
            background-color: #00897b;
            color: white;
            text-decoration: none;
            padding: 11px 20px;
            border-radius: 6px;
        }

        .boton:hover {
            background-color: #00695c;
        }
    </style>
</head>

<body>

<header>
    <h2>🇸🇻 Catálogo turístico</h2>
</header>

<div class="contenedor">

    <div class="detalle">

        <h1>{{ $destino['titulo'] }}</h1>

        <div class="dato">
            <span class="etiqueta">📍 Departamento:</span>
            {{ $destino['departamento'] }}
        </div>

        <div class="dato">
            <span class="etiqueta">Categoría:</span>
            <span class="categoria">
                {{ $destino['categoria'] }}
            </span>
        </div>

        <div class="dato">
            <span class="etiqueta">💰 Precio:</span>
            ${{ number_format($destino['precio'], 2) }}
        </div>

        <div class="dato">
            <span class="etiqueta">📌 Ubicación:</span>
            {{ $destino['ubicacion'] }}
        </div>

        <div class="dato">
            <span class="etiqueta">📝 Descripción:</span>
            <p>{{ $destino['descripcion'] }}</p>
        </div>

        <a class="boton" href="/destinos">
            ← Volver a destinos
        </a>

    </div>

</div>

</body>
</html>