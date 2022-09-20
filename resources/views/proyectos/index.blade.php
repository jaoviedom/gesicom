@extends('layouts.gestion.layout')

@section("titulo", "Proyectos")

@section("content")
    <h1>Proyectos</h1>
    <hr>
    @if ( Session::has( 'mensaje' ) )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Éxito!</strong> {{ Session::get( 'mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('proyectos.create') }}" class="btn btn-secondary my-3">Agregar proyecto</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Vigencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->vigencia }}</td>
                    <td>
                        <a href="{{ route('proyectos.show', $item->id) }}" class="btn btn-primary rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Vista previa">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ url( '/proyectos/' . $item->id . '/edit' ) }}" class="btn btn-warning rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('proyectos.destroy', $item->id) }}" method="post" class="d-inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger rounded-circle" onclick="return confirm( '¿Desea eliminar el registro?' )" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                        <a href="{{ route('proyectos.verAddInvestigador', $item->id) }}" class="ms-3 btn btn-secondary rounded-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Investigadores">
                            <i class="fa-solid fa-users"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection