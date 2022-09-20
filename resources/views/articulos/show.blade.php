@extends('layouts.gestion.layout')

@section("titulo", "Detalle de artículo")

@section("content")
    
    <form action="{{ route('articulos.store') }}" method="post">
        @csrf
        @include('articulos.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection