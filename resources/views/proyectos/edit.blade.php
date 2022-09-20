@extends('layouts.gestion.layout')

@section("titulo", "Editar proyecto")

@section("content")
    
    <form action="{{ route('proyectos.update', $proyecto->id) }}" class="needs-validation" method="POST" novalidate>
        @csrf
        @method("PUT")
        @include('proyectos.form', [ 'modo' => 'Editar' ])
    </form>
    
@endsection