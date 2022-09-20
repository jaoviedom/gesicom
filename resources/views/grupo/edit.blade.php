@extends('layouts.gestion.layout')

@section("titulo", "Grupo de investigación")

@section("content")
    <h1>Editar datos de grupo de investigación</h1>
    <hr>
    @if ( Session::has( 'mensaje' ) )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Éxito!</strong> {{ Session::get( 'mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('grupo.update', $grupo->id) }}" class="form-controller" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="codigo" name="codigo" value="{{ $grupo->codigo }}">
            <label for="floatingInput">Código</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="nombre" name="nombre" value="{{ $grupo->nombre }}">
            <label for="floatingPassword">Nombre</label>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection