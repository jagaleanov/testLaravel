@csrf

<div class="form-group">
    <label for="document_type">Tipo de documento</label>
    <input type="text" name="document_type" id="document_type" class="form-control"
        value="{{ old('document_type', $inscription->document_type) }}" />
    @error('document_type')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="document_number">Número de documento</label>
    <input type="text" name="document_number" id="document_number" class="form-control"
        value="{{ old('document_number', $inscription->document_number) }}" />
    @error('document_number')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $inscription->name) }}" />
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="last_name">Apellido</label>
    <input type="text" name="last_name" id="last_name" class="form-control"
        value="{{ old('last_name', $inscription->last_name) }}" />
    @error('last_name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="email">Correo electrónico</label>
    <input type="email" name="email" id="email" class="form-control"
        value="{{ old('email', $inscription->email) }}" />
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="birthdate">Fecha de nacimiento</label>
    <input type="date" name="birthdate" id="birthdate" class="form-control"
        value="{{ old('birthdate', $inscription->date_in != null ? $inscription->birthdate->format('Y-m-d') : null) }}" />
    @error('birthdate')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="gender">Género</label>
    <select name="gender" id="gender" class="form-control">
        <option value="">--</option>
        <option value="F" {{ old('gender', $inscription->gender) == 'F' ? 'selected' : null }}>F</option>
        <option value="M" {{ old('gender', $inscription->gender) == 'M' ? 'selected' : null }}>M</option>
    </select>
    @error('gender')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="country">País</label>
    <select name="country" id="country" class="form-control">
        <option value="">--</option>
    </select>
    @error('country')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="state">Departamento</label>
    <select name="state" id="state" class="form-control">
        <option value="">--</option>
    </select>
    @error('state')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="city">Ciudad</label>
    <select name="city" id="city" class="form-control">
        <option value="">--</option>
    </select>
    @error('city')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" name="address" id="address" class="form-control"
        value="{{ old('address', $inscription->address) }}" />
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="eps">EPS</label>
    <input type="text" name="eps" id="eps" class="form-control"
        value="{{ old('eps', $inscription->eps) }}" />
    @error('eps')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="blood">Sangre</label>
    <select name="blood" id="blood" class="form-control">
        <option value="">--</option>
        <option value="O+" {{ old('blood', $inscription->blood) == 'O+' ? 'selected' : null }}>O+</option>
        <option value="O-" {{ old('blood', $inscription->blood) == 'O-' ? 'selected' : null }}>O-</option>
        <option value="A+" {{ old('blood', $inscription->blood) == 'A+' ? 'selected' : null }}>A+</option>
        <option value="A-" {{ old('blood', $inscription->blood) == 'A-' ? 'selected' : null }}>A-</option>
        <option value="B+" {{ old('blood', $inscription->blood) == 'B+' ? 'selected' : null }}>B+</option>
        <option value="B-" {{ old('blood', $inscription->blood) == 'B-' ? 'selected' : null }}>B-</option>
        <option value="AB+" {{ old('blood', $inscription->blood) == 'AB+' ? 'selected' : null }}>AB+</option>
        <option value="AB-" {{ old('blood', $inscription->blood) == 'AB-' ? 'selected' : null }}>AB-</option>
    </select>
    @error('blood')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Teléfono</label>
    <input type="tel" name="phone" id="phone" class="form-control"
        value="{{ old('phone', $inscription->phone) }}" />
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="category">Categoría</label>
    <select name="category" id="category" class="form-control">
        <option value="">--</option>
    </select>
    @error('category')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>








