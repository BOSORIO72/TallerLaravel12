<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    // GET /reportes/{mes?}
    public function monthly(?string $mes = null)
    {
        // Datos simulados por mes
        $datosPorMes = [
            'enero'   => ['totalReservas' => 48, 'totalIngresos' => 2450000],
            'febrero' => ['totalReservas' => 53, 'totalIngresos' => 3100000],
            'marzo'   => ['totalReservas' => 37, 'totalIngresos' => 1980000],
        ];

        $resumen = null;

        if ($mes !== null) {
            // Si el mes existe en los datos simulados lo usamos, si no retornamos vacío
            $resumen = $datosPorMes[$mes] ?? null;
        }

        return view('reports.monthly', [
            'mes'     => $mes,
            'resumen' => $resumen,
        ]);
    }
}
