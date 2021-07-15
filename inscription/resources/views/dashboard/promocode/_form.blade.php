@csrf
<div class="form-group">
    <label for="code">Código</label>
    <input type="text" name="code" id="code" class="form-control" value="{{ old('code', $promocode->code) }}" />
    @error('code')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="expire_date">Fecha de vencimiento</label>
    <input type="date" name="expire_date" id="expire_date" class="form-control"
        value="{{ old('expire_date', $promocode->expire_date != null ? $promocode->expire_date->format('Y-m-d') : null) }}" />
    @error('expire_date')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="value">Valor</label>
    <input type="number" name="value" id="value" class="form-control" min="0"
        value="{{ old('value', $promocode->value) }}" />
    @error('value')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="type">Tipo</label>
    <select name="type" id="type" class="form-control">
        <option value="percent" {{ old('percent', $promocode->status) == 'percent' ? 'selected' : null }}>Procentaje
        </option>
        <option value="disscount" {{ old('disscount', $promocode->status) == 'disscount' ? 'selected' : null }}>
            Descuento</option>
    </select>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="uses_in">Cantidad inicial</label>
    <input type="number" name="uses_in" id="uses_in" class="form-control" min="0"
        value="{{ old('uses_in', $promocode->uses_in) }}" />
    @error('uses_in')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="status">Estado</label>
    <select name="status" id="status" class="form-control">
        <option value="1" {{ old('status', $promocode->status) == '1' ? 'selected' : null }}>Activo</option>
        <option value="0" {{ old('status', $promocode->status) == '0' ? 'selected' : null }}>Inactivo</option>
    </select>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<input type="submit" class="btn btn-primary" value="submit" />
