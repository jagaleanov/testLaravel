@csrf

<div class="form-group">
    <label for="name">Nombre</label>

    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="email">Correo electrónico</label>

    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email">

    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

@if ($ask_password)
    <div class="form-group">
        <label for="password">Contraseña</label>

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">

        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endif

<div class="form-group">
    <label for="password-confirm">Confirmación de contraseña</label>

    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
        autocomplete="new-password">
</div>

<input type="submit" class="btn btn-primary" value="submit" />
