@extends('dashboard.master')

@section('title', 'Nuevo usuario')

@section('content')
    <!--contenido-->
        <h1>Nuevo usuario</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @include('dashboard.user._form')
        </form>
@endsection
