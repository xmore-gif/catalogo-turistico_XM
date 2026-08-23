<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Destinos turísticos de El Salvador</title>

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
            padding: 45px 20px;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 36px;
        }

        header p {
            margin: 0;
            font-size: 18px;
        }

        .contenedor {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .titulo-seccion {
            text-align: center;
            margin-bottom: 30px;
        }

        .titulo-seccion h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .titulo-seccion p {
            color: #607d8b;
        }

        .destinos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .tarjeta {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s;
        }

        .tarjeta:hover {
            transform: translateY(-5px);
        }

        .tarjeta h3 {
            color: #00695c;
            font-size: 23px;
            margin-top: 0;
        }

        .dato {
            margin: 10px 0;
        }

        .etiqueta {
            font-weight: bold;
            color: #455a64;
        }

        .categoria {
            display: inline-block;
            background-color: #e0f2f1;
            color: #00695c;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 5px;
        }

        .boton {
            display: inline-block;
            margin-top: 20px;
            background-color: #00897b;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: bold;
        }

        .boton:hover {
            background-color: #00695c;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 25px;
            background-color: #263238;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>🇸🇻 Descubre El Salvador</h1>
    <p>Explora nuestros destinos turísticos</p>
</header>

<div class="contenedor">

    <div class="titulo-seccion">
        <h2>Destinos turísticos</h2>
        <p>Conoce algunos de los lugares más interesantes de El Salvador</p>
    </div>

    <div class="destinos">

        @foreach ($destinos as $destino)

            <div class="tarjeta">

                <h3>{{ $destino['titulo'] }}</h3>

                <div class="dato">
                    <span class="etiqueta">📍 Departamento:</span>
                    {{ $destino['departamento'] }}
                </div>

                <div class="dato">
                    <span class="etiqueta">Categoría:</span>
                    <div class="categoria">
                        {{ $destino['categoria'] }}
                    </div>
                </div>

                <a
                    class="boton"
                    href="/destinos/{{ $destino['id'] }}"
                >
                    Ver detalles →
                </a>

            </div>

        @endforeach

    </div>

</div>

<footer>
    <p>Catálogo turístico de El Salvador</p>
</footer>

</body>
</html>