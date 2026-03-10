<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Datos simulados (sin base de datos)
    private function getReservas(): array
    {
        return [
            ['id' => 101, 'cancha' => 'Tenis A',   'fecha' => '2026-03-05', 'hora' => '18:00', 'cliente' => 'Luis',    'duracion' => 1, 'total' => 25000],
            ['id' => 102, 'cancha' => 'Fútbol 5',  'fecha' => '2026-03-06', 'hora' => '10:00', 'cliente' => 'María',   'duracion' => 2, 'total' => 180000],
            ['id' => 103, 'cancha' => 'Tenis B',   'fecha' => '2026-03-07', 'hora' => '16:00', 'cliente' => 'Carlos',  'duracion' => 1, 'total' => 22000],
            ['id' => 104, 'cancha' => 'Básquet C', 'fecha' => '2026-03-08', 'hora' => '08:00', 'cliente' => 'Ana',     'duracion' => 2, 'total' => 70000],
        ];
    }

    // GET /reservas
    public function index()
    {
        $reservas = $this->getReservas();
        return view('bookings.index', ['reservas' => $reservas]);
    }

    // GET /reservas/crear
    public function create()
    {
        return view('bookings.create');
    }

    // GET /reservas/{id}
    public function show($id)
    {
        $reservas = $this->getReservas();

        // Buscar la reserva por id en el array simulado
        $reserva = null;
        foreach ($reservas as $r) {
            if ($r['id'] == $id) {
                $reserva = $r;
                break;
            }
        }

        return view('bookings.show', ['reserva' => $reserva]);
    }
}
