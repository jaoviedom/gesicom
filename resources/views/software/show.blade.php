@extends('layouts.gestion.layout')

@section("titulo", "Detalle de software")

@section("content")
    
    <form action="{{ route('software.store') }}" method="post">
        @csrf
        @include('software.form', [ 'modo' => 'Detalle de' ])
    </form>
    
@endsection