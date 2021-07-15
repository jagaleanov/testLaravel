@extends('dashboard.master')

@section('title', 'Nueva camiseta')

@section('content')
    <!--contenido-->
    <h1>Nueva camiseta</h1>
    <form action="{{ route('shirt.store') }}" method="POST">
        @include('dashboard.shirt._form')
    </form>
@endsection
