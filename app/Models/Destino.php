<?php

namespace App\Models;

class Destino
{
    public static function all()
    {
        $ruta = storage_path('app/destinos.json');

        $datos = file_get_contents($ruta);

        return json_decode($datos, true);
    }

    public static function findOrFail($id)
    {
        $destinos = self::all();

        foreach ($destinos as $destino) {
            if ($destino['id'] == $id) {
                return $destino;
            }
        }

        abort(404);
    }
}