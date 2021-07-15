@extends('dashboard.master')

@section('title', 'Detalle de camiseta')

@section('content')
    <!--contenido-->
    <h1>Detalle de camiseta</h1>


    <div class="form-group">
        <label for="size">Talla</label>
        <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $shirt->size) }}" readonly />
    </div>

    <div class="form-group">
        <label for="quantity_in">Cantidad inicial</label>
        <input type="number" name="quantity_in" id="quantity_in" class="form-control" min="0"
            value="{{ old('quantity_in', $shirt->value) }}" readonly />
    </div>

    <div class="form-group">
        <label for="status">Estado</label>
        <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $shirt->status) }}"
            readonly />
    </div>
@endsection
