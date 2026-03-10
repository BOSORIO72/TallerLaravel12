@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Reporte Mensual</h1>

    {{-- Actividad 4: uso obligatorio de @if para distinguir con mes vs sin mes --}}
    @if($mes === null)

        {{-- Sin mes: mostrar selector con enlaces --}}
        <p style="color:#666; margin-bottom:1rem;">Seleccione un mes para ver el reporte:</p>
        <div style="display:flex; gap:1rem;">
            <a href="{{ route('reports.monthly', ['mes' => 'enero']) }}"   class="btn">Enero</a>
            <a href="{{ route('reports.monthly', ['mes' => 'febrero']) }}" class="btn">Febrero</a>
            <a href="{{ route('reports.monthly', ['mes' => 'marzo']) }}"   class="btn">Marzo</a>
        </div>

    @else

        {{-- Con mes: mostrar resumen simulado --}}
        <p style="margin-bottom:1rem;">
            Mostrando datos para: <strong style="text-transform:capitalize;">{{ $mes }}</strong>
        </p>

        @if($resumen !== null)
            <table style="max-width:350px;">
                <tr>
                    <th>Mes</th>
                    <td style="text-transform:capitalize;">{{ $mes }}</td>
                </tr>
                <tr>
                    <th>Total reservas</th>
                    <td>{{ $resumen['totalReservas'] }}</td>
                </tr>
                <tr>
                    <th>Total ingresos</th>
                    <td><strong>${{ number_format($resumen['totalIngresos'], 0, ',', '.') }}</strong></td>
                </tr>
            </table>
        @else
            <div class="alert" style="margin-top:0.5rem;">
                No hay datos simulados para el mes "<strong>{{ $mes }}</strong>".
            </div>
        @endif

        <br>
        <a href="{{ route('reports.monthly') }}" class="btn btn-outline">← Ver todos los meses</a>

    @endif
</div>
@endsection
