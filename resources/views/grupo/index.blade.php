@extends('layouts.gestion.layout')

@section("titulo", "Grupo de investigación")

@section("content")
    <h1>Grupo</h1>
    <hr>
    @if ( Session::has( 'mensaje' ) )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Éxito!</strong> {{ Session::get( 'mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-3">Código:</div>
        <div class="col-sm-9">{{ $grupo->codigo }}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">Nombre:</div>
        <div class="col-sm-9">{{ $grupo->nombre }}</div>
    </div>

    <a href="{{ route('grupo.edit', 1) }}" class="btn btn-primary">Actualizar</a>

@endsection