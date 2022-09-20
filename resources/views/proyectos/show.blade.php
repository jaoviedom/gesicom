@extends('layouts.gestion.layout')

@section("titulo", "Detalle de proyecto")

@section("content")
    
    <form action="{{ route('proyectos.store') }}" method="post">
        @csrf
        @include('proyectos.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection