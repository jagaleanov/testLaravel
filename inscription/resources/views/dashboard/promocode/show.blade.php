@extends('dashboard.master')

@section('title', 'Detalle de código promocional')

@section('content')
    <!--contenido-->
    <h1>Detalle de código promocional</h1>

    <div class="form-group">
        <label for="code">Código</label>
        <input type="text" name="code" id="code" class="form-control" value="{{ old('code', $promocode->code) }}"
            readonly />
    </div>

    <div class="form-group">
        <label for="expire_date">Fecha de vencimiento</label>
        <input type="date" name="expire_date" id="expire_date" class="form-control"
            value="{{ old('expire_date', $promocode->expire_date != null ? $promocode->expire_date->format('Y-m-d') : null) }}"
            readonly />
    </div>

    <div class="form-group">
        <label for="value">Valor</label>
        <input type="number" name="value" id="value" class="form-control" min="0"
            value="{{ old('value', $promocode->value) }}" readonly />
    </div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $promocode->type) }}"
            readonly />
    </div>

    <div class="form-group">
        <label for="uses_in">Cantidad inicial</label>
        <input type="number" name="uses_in" id="uses_in" class="form-control" min="0"
            value="{{ old('uses_in', $promocode->uses_in) }}" readonly />
    </div>

    <div class="form-group">
        <label for="status">Estado</label>
        <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $promocode->status) }}"
            readonly />
    </div>
@endsection
