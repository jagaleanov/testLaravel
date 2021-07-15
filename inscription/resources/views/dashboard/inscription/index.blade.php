@extends('dashboard.master')

@section('title', 'Listado de inscripciones')

@section('content')
    <!--contenido-->
    <h1>Listado de inscripciones</h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Género</th>
                    <th scope="col">País</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">EPS</th>
                    <th scope="col">Sangre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Fase</th>
                    <th scope="col">Total</th>
                    <th scope="col">Código promocional</th>
                    <th scope="col">Fecha de respuesta</th>
                    <th scope="col">Fecha de confirmación</th>
                    <th scope="col">Id POL</th>
                    <th scope="col">Estado POL</th>
                    <th scope="col">Medio pago</th>
                    <th scope="col">Tipo medio pago</th>
                    <th scope="col">Código de autorización</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Fecha de actualización</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inscriptions as $inscription)
                    <tr>
                        <td>{{ $inscription->id }}</td>
                        <td>{{ $inscription->runner->document_type }} {{ $inscription->document_number }}</td>
                        <td>{{ $inscription->user->name }}</td>
                        <td>{{ $inscription->user->last_name }}</td>
                        <td>{{ $inscription->user->email }}</td>
                        <td>{{ $inscription->runner->birthdate->format('Y-M-d') }}</td>
                        <td>{{ $inscription->runner->gender }}</td>
                        <td>{{ $inscription->runner->country }}</td>
                        <td>{{ $inscription->runner->state }}</td>
                        <td>{{ $inscription->runner->city }}</td>
                        <td>{{ $inscription->runner->address }}</td>
                        <td>{{ $inscription->runner->eps }}</td>
                        <td>{{ $inscription->runner->blood }}</td>
                        <td>{{ $inscription->runner->phone }}</td>
                        <td>{{ $inscription->category }}</td>
                        <td>{{ $inscription->phase_id }}</td>
                        <td>{{ $inscription->total }}</td>
                        <td>{{ $inscription->promo_code_id }}</td>
                        <td>{{ $inscription->resp_stamp }}</td>
                        <td>{{ $inscription->conf_stamp }}</td>
                        <td>{{ $inscription->pol_id }}</td>
                        <td>{{ $inscription->pol_status }}</td>
                        <td>{{ $inscription->payment_method }}</td>
                        <td>{{ $inscription->payment_method_type }}</td>
                        <td>{{ $inscription->authorization_code }}</td>

                        <td>{{ $inscription->created_at->format('Y-M-d') }}</td>
                        <td>{{ $inscription->updated_at->format('Y-M-d') }}</td>
                        <td>
                            <a href="{{ route('inscription.show', $inscription->id) }}"
                                class="btn btn-primary btn-sm">Ver</a>
                            <a href="{{ route('inscription.edit', $inscription->id) }}"
                                class="btn btn-primary btn-sm">Editar</a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $inscriptions->links() }}

@endsection
