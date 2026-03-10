@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Bienvenido a CanchasCuba</h1>
    <p>Sistema de gestión de canchas y reservas deportivas.</p>
</div>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
    <div class="card" style="text-align:center;">
        <h2>Canchas</h2>
        <p style="margin: 0.5rem 0; color: #666;">Consulta y gestiona las canchas disponibles.</p>
        <a href="{{ route('courts.index') }}" class="btn">Ver canchas</a>
    </div>
    <div class="card" style="text-align:center;">
        <h2>Reservas</h2>
        <p style="margin: 0.5rem 0; color: #666;">Revisa todas las reservas registradas.</p>
        <a href="{{ route('bookings.index') }}" class="btn">Ver reservas</a>
    </div>
    <div class="card" style="text-align:center;">
        <h2>Reportes</h2>
        <p style="margin: 0.5rem 0; color: #666;">Consulta el resumen mensual de ingresos.</p>
        <a href="{{ route('reports.monthly') }}" class="btn">Ver reportes</a>
    </div>
</div>
@endsection
