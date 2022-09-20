@extends('layouts.gestion.layout')

@section("titulo", "Editar noticia de semillero")

@section("content")
    
    <form action="{{ route('semilleros.update', $semillero->id) }}" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method("PUT")
        @include('semilleros.form', [ 'modo' => 'Editar' ])
    </form>
    
@endsection