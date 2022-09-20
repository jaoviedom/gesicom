@extends('layouts.gestion.layout')

@section("titulo", "Nueva noticia")

@section("content")
    
    <form action="{{ route('semilleros.store') }}" method="post" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        @include('semilleros.form', [ 'modo' => 'Nuevo' ])
    </form>
    
@endsection