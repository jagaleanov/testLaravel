@extends('dashboard.master')

@section('title', 'Nueva fase')

@section('content')
    <!--contenido-->
    <h1>Nueva fase</h1>
    <form action="{{ route('phase.store') }}" method="POST">
        @include('dashboard.phase._form')
    </form>
@endsection
