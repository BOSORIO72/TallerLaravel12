@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Lista de Reservas</h1>
    <a href="{{ route('bookings.create') }}" class="btn" style="margin-bottom:1rem; display:inline-block;">+ Nueva reserva</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cancha</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>#{{ $reserva['id'] }}</td>
                    <td>{{ $reserva['cancha'] }}</td>
                    <td>{{ $reserva['fecha'] }}</td>
                    <td>{{ $reserva['hora'] }}</td>
                    <td>{{ $reserva['cliente'] }}</td>
                    <td>${{ number_format($reserva['total'], 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('bookings.show', ['id' => $reserva['id']]) }}" class="btn btn-outline">Ver detalle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
