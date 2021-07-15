@csrf
<div class="form-group">
    <label for="size">Talla</label>
    <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $shirt->size) }}" />
    @error('size')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="quantity_in">Cantidad inicial</label>
    <input type="number" name="quantity_in" id="quantity_in" class="form-control" min="0"
        value="{{ old('quantity_in', $shirt->value) }}" />
    @error('quantity_in')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="status">Estado</label>
    <select name="status" id="status" class="form-control">
        <option value="1" {{ old('status', $shirt->status) == '1' ? 'selected' : null }}>Activo</option>
        <option value="0" {{ old('status', $shirt->status) == '0' ? 'selected' : null }}>Inactivo</option>
    </select>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<input type="submit" class="btn btn-primary" value="submit" />
