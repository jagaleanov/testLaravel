@extends('dashboard.master')

@section('title', 'Editar usuario')

@section('content')
    <!--contenido-->
    <h1>Editar usuario</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.user._form')
    </form>
@endsection
