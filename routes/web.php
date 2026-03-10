<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;

// ─── Inicio ───────────────────────────────────────────────
Route::get('/', function () {
    return view('home');
})->name('home');

// ─── Grupo Canchas ────────────────────────────────────────
// IMPORTANTE: rutas estáticas PRIMERO, dinámicas DESPUÉS
Route::get('/canchas', [CourtController::class, 'index'])->name('courts.index');
Route::get('/canchas/nueva', [CourtController::class, 'create'])->name('courts.create');   // ESTÁTICA
Route::get('/canchas/{id}', [CourtController::class, 'show'])->name('courts.show');        // DINÁMICA

// ─── Grupo Reservas ───────────────────────────────────────
Route::get('/reservas', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/reservas/crear', [BookingController::class, 'create'])->name('bookings.create'); // ESTÁTICA
Route::get('/reservas/{id}', [BookingController::class, 'show'])->name('bookings.show');      // DINÁMICA

// ─── Reportes (parámetro opcional) ────────────────────────
Route::get('/reportes/{mes?}', [ReportController::class, 'monthly'])->name('reports.monthly');
