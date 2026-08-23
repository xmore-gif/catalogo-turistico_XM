# Catálogo Turístico de El Salvador

Aplicación web desarrollada con Laravel que permite consultar diferentes lugares turísticos de El Salvador.

El proyecto fue desarrollado como parte de la actividad de implementación del patrón arquitectónico MVC en Laravel.

---

## Descripción del proyecto

El catálogo permite visualizar una lista de lugares turísticos de El Salvador y consultar información detallada de cada destino.

Los datos utilizados por la aplicación se encuentran almacenados en un archivo JSON creado específicamente para este proyecto.

Cada destino contiene información como:

- Nombre del lugar
- Departamento
- Categoría
- Precio
- Descripción
- Otros datos relevantes

La aplicación utiliza Laravel para manejar las rutas, controladores, modelos y vistas.

---

## Tecnologías utilizadas

- PHP 8.3
- Laravel 13
- Composer
- HTML
- CSS
- Blade
- JSON
- Visual Studio Code
- Laragon

---

## Estructura del proyecto

Las partes principales utilizadas para desarrollar la aplicación son:

```text
catalogo-turistico/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── DestinoController.php
│   │
│   └── Models/
│       └── Destino.php
│
├── resources/
│   └── views/
│       └── destinos/
│           ├── index.blade.php
│           └── show.blade.php
│
├── routes/
│   └── web.php
│
├── storage/
│   └── app/
│       └── data/
│           └── destinos.json
│
├── screenshots/
│   ├── lista-destinos.png
│   └── detalle-destino.png
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.md