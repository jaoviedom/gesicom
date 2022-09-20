@extends('layouts.gestion.layout')

@section("titulo", "Detalle de libro")

@section("content")
    
    <form action="{{ route('libros.store') }}" method="post">
        @csrf
        @include('libros.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection