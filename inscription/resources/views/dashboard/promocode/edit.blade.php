@extends('dashboard.master')

@section('title', 'Editar código promocional')

@section('content')
    <!--contenido-->
    <h1>Editar código promocional</h1>
    <form action="{{ route('promocode.update', $promocode->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.promocode._form')
    </form>
@endsection
