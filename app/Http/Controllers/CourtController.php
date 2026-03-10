<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourtController extends Controller
{
    // Datos simulados (sin base de datos)
    private function getCanchas(): array
    {
        return [
            ['id' => 1, 'nombre' => 'Tenis A',   'tipo' => 'Tenis',   'precioHora' => 25000],
            ['id' => 2, 'nombre' => 'Fútbol 5',  'tipo' => 'Fútbol',  'precioHora' => 90000],
            ['id' => 3, 'nombre' => 'Tenis B',   'tipo' => 'Tenis',   'precioHora' => 22000],
            ['id' => 4, 'nombre' => 'Básquet C', 'tipo' => 'Básquet', 'precioHora' => 35000],
        ];
    }

    // GET /canchas
    public function index()
    {
        $canchas = $this->getCanchas();
        return view('courts.index', ['canchas' => $canchas]);
    }

    // GET /canchas/nueva
    public function create()
    {
        return view('courts.create');
    }

    // GET /canchas/{id}
    public function show($id)
    {
        $canchas = $this->getCanchas();

        // Buscar la cancha por id en el array simulado
        $cancha = null;
        foreach ($canchas as $c) {
            if ($c['id'] == $id) {
                $cancha = $c;
                break;
            }
        }

        return view('courts.show', ['cancha' => $cancha]);
    }
}
