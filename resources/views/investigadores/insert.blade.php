@extends('layouts.gestion.layout')

@section("titulo", "Nuevo investigador")

@section("content")
    
    <form action="{{ route('investigadores.store') }}" method="post" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        @include('investigadores.form', [ 'modo' => 'Nuevo' ])
    </form>
    
@endsection