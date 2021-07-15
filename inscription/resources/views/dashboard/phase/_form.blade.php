@csrf
<div class="form-group">
    <label for="name">Nombre de la fase</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $phase->name) }}" />
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="value">Valor de la fase</label>
    <input type="number" name="value" id="value" class="form-control" min="0"
        value="{{ old('value', $phase->value) }}" />
    @error('value')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="date_in">Fecha de inicio</label>
    <input type="date" name="date_in" id="date_in" class="form-control"
        value="{{ old('date_in', $phase->date_in != null ? $phase->date_in->format('Y-m-d') : null) }}" />
    @error('date_in')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="status">Estado de la fase</label>
    <select name="status" id="status" class="form-control">
        <option value="1" {{ old('status', $phase->status) == '1' ? 'selected' : null }}>Activo</option>
        <option value="0" {{ old('status', $phase->status) == '0' ? 'selected' : null }}>Inactivo</option>
    </select>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<input type="submit" class="btn btn-primary" value="submit" />
