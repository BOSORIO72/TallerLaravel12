@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Lista de Canchas</h1>
    <a href="{{ route('courts.create') }}" class="btn" style="margin-bottom:1rem; display:inline-block;">+ Nueva cancha</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio/Hora</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            {{-- Actividad 4: uso obligatorio de @foreach --}}
            @foreach($canchas as $cancha)
                <tr>
                    <td>{{ $cancha['id'] }}</td>
                    <td>{{ $cancha['nombre'] }}</td>
                    <td><span class="badge">{{ $cancha['tipo'] }}</span></td>
                    <td>${{ number_format($cancha['precioHora'], 0, ',', '.') }}</td>
                    <td>
                        {{-- Actividad 4: enlace al detalle con route() --}}
                        <a href="{{ route('courts.show', ['id' => $cancha['id']]) }}" class="btn btn-outline">Ver detalle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
