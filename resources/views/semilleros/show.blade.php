@extends('layouts.gestion.layout')

@section("titulo", "Detalle de noticia de semillero")

@section("content")
    
    <form action="{{ route('semilleros.store') }}" method="post">
        @csrf
        @include('semilleros.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection