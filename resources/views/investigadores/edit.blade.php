@extends('layouts.gestion.layout')

@section("titulo", "Editar investigador")

@section("content")
    
    <form action="{{ route('investigadores.update', $investigador->id) }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method("PUT")
        @include('investigadores.form', [ 'modo' => 'Editar' ])
    </form>
    
@endsection