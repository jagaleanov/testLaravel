@extends('dashboard.master')

@section('title', 'Detalle de fase')

@section('content')
    <!--contenido-->
    <h1>Detalle de fase</h1>

    <div class="form-group">
        <label for="name">Nombre de la fase</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $phase->name }}" readonly />
    </div>

    <div class="form-group">
        <label for="value">Valor de la fase</label>
        <input type="number" name="value" id="value" class="form-control" min="0" value="{{ $phase->value }}" readonly />
    </div>

    <div class="form-group">
        <label for="date_in">Fecha de inicio</label>
        <input type="date" name="date_in" id="date_in" class="form-control" value="{{ $phase->date_in->format('Y-m-d') }}"
            readonly />
    </div>

    <div class="form-group">
        <label for="status">Estado de la fase</label>
        <input type="text" name="status" id="status" class="form-control"
            value="{{ $phase->status == 1 ? 'Activa' : 'Inactiva' }}" readonly />
    </div>
@endsection
