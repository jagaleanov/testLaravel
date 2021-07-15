@extends('dashboard.master')

@section('title', 'Editar camiseta')

@section('content')
    <!--contenido-->
    <h1>Editar camiseta</h1>
    <form action="{{ route('shirt.update', $shirt->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.shirt._form')
    </form>
@endsection
