@extends('layouts.gestion.layout')

@section("titulo", "Detalle de investigador")

@section("content")
    
    <form action="{{ route('investigadores.store') }}" method="post">
        @csrf
        @include('investigadores.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection