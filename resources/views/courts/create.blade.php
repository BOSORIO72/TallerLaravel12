@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Nueva Cancha</h1>
    <p style="color:#666; margin-bottom:1rem;">Formulario simulado (sin base de datos en este taller).</p>

    <div style="display: flex; flex-direction: column; gap: 1rem; max-width: 400px;">
        <div>
            <label style="font-weight:bold; display:block; margin-bottom:0.3rem;">Nombre</label>
            <input type="text" placeholder="Ej: Tenis C" style="width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px;">
        </div>
        <div>
            <label style="font-weight:bold; display:block; margin-bottom:0.3rem;">Tipo</label>
            <select style="width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px;">
                <option>Tenis</option>
                <option>Fútbol</option>
                <option>Básquet</option>
            </select>
        </div>
        <div>
            <label style="font-weight:bold; display:block; margin-bottom:0.3rem;">Precio por hora</label>
            <input type="number" placeholder="Ej: 30000" style="width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px;">
        </div>
        <div style="padding: 0.8rem; background:#fff3cd; border-radius:4px; border:1px solid #ffc107;">
            Este formulario es <strong>simulado</strong>. No persiste datos (taller sin BD).
        </div>
        <div>
            <a href="{{ route('courts.index') }}" class="btn btn-outline">← Volver a canchas</a>
        </div>
    </div>
</div>
@endsection
