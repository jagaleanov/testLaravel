@extends('dashboard.master')

@section('title', 'Detalle de incripción')

@section('content')
    <!--contenido-->
    <h1>Detalle de incripción</h1>

    <div class="form-group">
        <label for="document_type">Tipo de documento</label>
        <input type="text" name="document_type" id="document_type" class="form-control"
            value="{{ old('document_type', $inscription->document_type) }}" />
    </div>

    <div class="form-group">
        <label for="document_number">Número de documento</label>
        <input type="text" name="document_number" id="document_number" class="form-control"
            value="{{ old('document_number', $inscription->document_number) }}" />
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $inscription->name) }}" />
    </div>

    <div class="form-group">
        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" id="last_name" class="form-control"
            value="{{ old('last_name', $inscription->last_name) }}" />
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" class="form-control"
            value="{{ old('email', $inscription->email) }}" />
    </div>

    <div class="form-group">
        <label for="birthdate">Fecha de nacimiento</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control"
            value="{{ old('birthdate', $inscription->date_in != null ? $inscription->birthdate->format('Y-m-d') : null) }}" />
    </div>

    <div class="form-group">
        <label for="gender">Género</label>
        <input type="text" name="gender" id="gender" class="form-control"
            value="{{ old('gender', $inscription->gender) }}" />
    </div>

    <div class="form-group">
        <label for="country">País</label>
        <input type="text" name="country" id="country" class="form-control"
            value="{{ old('country', $inscription->country) }}" />
    </div>

    <div class="form-group">
        <label for="state">Departamento</label>
        <input type="text" name="state" id="state" class="form-control" value="{{ old('state', $inscription->state) }}" />
    </div>

    <div class="form-group">
        <label for="city">Ciudad</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $inscription->city) }}" />
    </div>

    <div class="form-group">
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" class="form-control"
            value="{{ old('address', $inscription->address) }}" />
    </div>

    <div class="form-group">
        <label for="eps">EPS</label>
        <input type="text" name="eps" id="eps" class="form-control" value="{{ old('eps', $inscription->eps) }}" />
    </div>

    <div class="form-group">
        <label for="blood">Sangre</label>
        <input type="text" name="blood" id="blood" class="form-control"
            value="{{ old('blood', $inscription->blood) }}" />
    </div>

    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone', $inscription->phone) }}" />
    </div>

    <div class="form-group">
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" class="form-control"
            value="{{ old('category', $inscription->category) }}" />
    </div>

    <div class="form-group">
        <label for="phase_id">Fase</label>
        <input type="text" name="phase_id" id="phase_id" class="form-control"
            value="{{ old('phase_id', $inscription->phase_id) }}" />
    </div>

    <div class="form-group">
        <label for="total">Total</label>
        <input type="text" name="total" id="total" class="form-control"
            value="{{ old('total', $inscription->total) }}" />
    </div>

    <div class="form-group">
        <label for="promo_code_id">Código promocional</label>
        <input type="text" name="promo_code_id" id="promo_code_id" class="form-control"
            value="{{ old('promo_code_id', $inscription->promo_code_id) }}" />
    </div>

    <div class="form-group">
        <label for="resp_stamp">Fecha de respuesta</label>
        <input type="text" name="resp_stamp" id="resp_stamp" class="form-control"
            value="{{ old('resp_stamp', $inscription->resp_stamp) }}" />
    </div>

    <div class="form-group">
        <label for="conf_stamp">Fecha de confirmación</label>
        <input type="text" name="conf_stamp" id="conf_stamp" class="form-control"
            value="{{ old('conf_stamp', $inscription->conf_stamp) }}" />
    </div>

    <div class="form-group">
        <label for="pol_id">Id POL</label>
        <input type="text" name="pol_id" id="pol_id" class="form-control"
            value="{{ old('pol_id', $inscription->pol_id) }}" />
    </div>

    <div class="form-group">
        <label for="pol_status">Estado POL</label>
        <input type="text" name="pol_status" id="pol_status" class="form-control"
            value="{{ old('pol_status', $inscription->pol_status) }}" />
    </div>

    <div class="form-group">
        <label for="payment_method">Medio pago</label>
        <input type="text" name="payment_method" id="payment_method" class="form-control"
            value="{{ old('payment_method', $inscription->payment_method) }}" />
    </div>

    <div class="form-group">
        <label for="payment_method_type">Tipo medio pago</label>
        <input type="text" name="payment_method_type" id="payment_method_type" class="form-control"
            value="{{ old('payment_method_type', $inscription->payment_method_type) }}" />
    </div>

    <div class="form-group">
        <label for="authorization_code">Código de autorización</label>
        <input type="text" name="authorization_code" id="authorization_code" class="form-control"
            value="{{ old('authorization_code', $inscription->authorization_code) }}" />
    </div>

@endsection
