@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Productos")

@section('content')
<main class="py-5">
    <section class="row gx-5">
        <div class="col-sm">
            <a href="{{ route('verProyectos') }}" class="text-decoration-none">
                <div class="card p-3 shadow">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-diagram-project fa-2xl"></i>
                        <span class="card-title text-center mt-3 ms-3 fw-bold">Proyectos</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm">
            <a href="{{ route('verProductos') }}" class="text-decoration-none">
                <div class="card p-3 shadow selected-item">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-book-open-reader fa-2xl selected-item"></i>
                        <span class="text-center mt-3 ms-3 fw-bold selected-item">Productos</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm">
            <a href="" class="text-decoration-none">
                <div class="card p-3 shadow">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-newspaper fa-2xl"></i>
                        <span class="card-title text-center mt-3 ms-3 fw-bold">Revista</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section class="mt-5">
        {{-- <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Productos</h2>
            </div>
        </div> --}}
        <div class="row g-4 pb-3">
            @foreach ($articulos as $item)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">{{ $item->titulo }}</div>
                        </div>
                        <div class="card-footer text-muted">
                            Artículo
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>
@endsection