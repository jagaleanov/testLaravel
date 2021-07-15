@extends('dashboard.master')

@section('title', 'Listado de fases')

@section('content')
    <!--contenido-->
    <h1>Listado de fases</h1>
    <a href="{{ route('phase.create') }}" class="btn btn-success btn-sm">Crear</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha inicial</th>
                <th scope="col">Nombre</th>
                <th scope="col">Valor</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Fecha de actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($phases as $phase)
                <tr>
                    <td>{{ $phase->id }}</td>
                    <td>{{ $phase->date_in->format('Y-M-d') }}</td>
                    <td>{{ $phase->name }}</td>
                    <td>{{ $phase->value }}</td>
                    <td>{{ $phase->status }}</td>
                    <td>{{ $phase->created_at->format('Y-M-d') }}</td>
                    <td>{{ $phase->updated_at->format('Y-M-d') }}</td>
                    <td>
                        <a href="{{ route('phase.show', $phase->id) }}" class="btn btn-primary btn-sm">Ver</a>
                        <a href="{{ route('phase.edit', $phase->id) }}" class="btn btn-primary btn-sm">Editar</a>


                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                            data-id="{{ $phase->id }}">Eliminar</button>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $phases->links() }}

    <!--MODAL-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Confirma que desea borrar el registro seleccionado?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>

                    <form id="formDelete" action="{{ route('phase.destroy', 0) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.


                action = $('#formDelete').attr('action', "{{ route('phase.destroy', 0) }}".slice(0, -1) +
                    id)

                var modal = $(this)
                modal.find('.modal-title').text('Eliminar registro ' + id) + id;
                $('#formDelete').attr('action').slice(0, -1)
            })
        });
    </script>

@endsection
