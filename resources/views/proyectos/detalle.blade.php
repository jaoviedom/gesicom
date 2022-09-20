@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Proyecto")

@section('content')
<main class="py-5 mb-5">
    <h1 class="text-center mb-3">{{ $proyecto->nombre }}</h1>
    <h2 class="mb-3">Vigencia: {{ $proyecto->vigencia }}</h2>
    <h2 class="mb-3">Descripción</h2>
    <p class="mb-3">{{ $proyecto->descripcion }}</p>
    <h2 class="mb-3">Línea de investigación</h2>
    <p class="mb-3">{{ $proyecto->linea }}</p>
    @if ($investigadores)
    <h2 class="mb-3">Investigadores</h2>
    <ul class="list-group list-group-flush mb-3">
        @foreach ($investigadores as $item)
            <li class="list-group-item">{{ $item->nombre }}</li>
        @endforeach
    </ul>
    @endif
    @if (count($articulos) > 0)
    <h2 class="mb-3">Productos</h2>
    <h3 class="mb-3">Artículos</h3>
    <ul class="list-group list-group-flush mb-3">
        @foreach ($articulos as $item)
        <li class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">
                    {{ $item->titulo }}
                    <a href="{{ $item->doi }}" class="text-orange ms-3" data-bs-toggle="tooltip" data-bs-title="Visitar">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </h5>
                <small>Artículo</small>
            </div>
            <small>{{ $item->anio }}</small>
        </li>
        @endforeach
    </ul>
    @endif
    @if (count($libros) > 0)
    <h3 class="mb-3">Libros</h3>
    <ul class="list-group list-group-flush mb-3">
        @foreach ($libros as $item)
            <li class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        {{ $item->titulo }}
                        <a href="{{ $item->enlace }}" class="text-orange ms-3" data-bs-toggle="tooltip" data-bs-title="Visitar">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </h5>
                    <small>Libro</small>
                </div>
                <small>{{ $item->anio }}</small>
            </li>
        @endforeach
    </ul>
    @endif
    @if (count($software) > 0)
    <h3 class="mb-3">Software</h3>
    <ul class="list-group list-group-flush mb-3">
        @foreach ($software as $item)
            <li class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        {{ $item->titulo }}
                        {{-- <a href="{{ $item->enlace }}" class="text-orange ms-3" data-bs-toggle="tooltip" data-bs-title="Visitar">
                            <i class="fa-solid fa-eye"></i>
                        </a> --}}
                    </h5>
                    <small>Software</small>
                </div>
                <small>{{ $item->anio }}</small>
            </li>
        @endforeach
    </ul>
    @endif
</main>
@endsection

@section('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection