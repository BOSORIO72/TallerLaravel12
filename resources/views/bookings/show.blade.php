@extends('layouts.app')

@section('content')

{{-- Actividad 4: uso de @if para validar si existe la cancha --}}
@if($cancha === null)
    <div class="card alert">
        <h2>Cancha no encontrada</h2>
        <p>El ID solicitado no corresponde a ninguna cancha registrada.</p>
        <a href="{{ route('courts.index') }}" class="btn" style="margin-top:0.8rem;">← Volver a canchas</a>
    </div>
@else
    <div class="card">
        <h1> {{ $cancha['nombre'] }}</h1>
        <table style="max-width:400px;">
            <tr>
                <th>ID</th>
                <td>{{ $cancha['id'] }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $cancha['nombre'] }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td><span class="badge">{{ $cancha['tipo'] }}</span></td>
            </tr>
            <tr>
                <th>Precio por hora</th>
                <td>${{ number_format($cancha['precioHora'], 0, ',', '.') }}</td>
            </tr>
        </table>
        <br>
        <a href="{{ route('courts.index') }}" class="btn btn-outline">← Volver a canchas</a>
        <a href="{{ route('bookings.create') }}" class="btn" style="margin-left:0.5rem;"> Hacer reserva</a>
    </div>
@endif

@endsection
