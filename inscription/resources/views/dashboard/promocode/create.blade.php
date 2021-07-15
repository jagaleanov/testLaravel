@extends('dashboard.master')

@section('title', 'Nuevo código promocional')

@section('content')
    <!--contenido-->
    <h1>Nuevo código promocional</h1>
    <form action="{{ route('promocode.store') }}" method="POST">
        @include('dashboard.promocode._form')
    </form>
@endsection
