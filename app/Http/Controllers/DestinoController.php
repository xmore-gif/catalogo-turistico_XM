<?php

namespace App\Http\Controllers;

use App\Models\Destino;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();

        return view('destinos.index', compact('destinos'));
    }

    public function show($id)
    {
        $destino = Destino::findOrFail($id);

        return view('destinos.show', compact('destino'));
    }
}