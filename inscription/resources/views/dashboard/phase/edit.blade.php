@extends('dashboard.master')

@section('title', 'Editar fase')

@section('content')
    <!--contenido-->
    <h1>Editar fase</h1>
    <form action="{{ route('phase.update', $phase->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.phase._form')
    </form>
@endsection
