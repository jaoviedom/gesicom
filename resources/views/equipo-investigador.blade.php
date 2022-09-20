@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Equipo")

@section('content')
<main class="py-5">
    <section class="row my-5">
        <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Equipo de trabajo</h2>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 mb-4 text-center">
                <a class="linea-subtitulo-equipo pb-3 h3 text-decoration-none" href="#">Equipo investigador</a>
            </div>
            <div class="col-sm-3 mb-4 text-center">
                <a class="subtitulo-equipo pb-3 h3 text-decoration-none" href="{{ route('irEquipoDirectivo') }}">Equipo directivo</a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="text-center">
            <div class="row mb-5 gy-4">
                @foreach ($dinamizadores as $item)
                    <div class="col-md-3">
                        <div class="card py-4 shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage') . '/' . $item->foto }}" alt="Foto" class="img-invest">
                                <h6 class="text-orange">
                                    {{ $item->nombre }}
                                </h6>
                                <p class="text-gris-oscuro">
                                    {{ $item->rol }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($lideres as $item)
                    <div class="col-md-3">
                        <div class="card py-4 shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage') . '/' . $item->foto }}" alt="Foto" class="img-invest">
                                <h6 class="text-orange">
                                    {{ $item->nombre }}
                                </h6>
                                <p class="text-gris-oscuro">
                                    {{ $item->rol }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($instructores as $item)
                    <div class="col-md-3">
                        <div class="card py-4 shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage') . '/' . $item->foto }}" alt="Foto" class="img-invest">
                                <h6 class="text-orange">
                                    {{ $item->nombre }}
                                </h6>
                                <p class="text-gris-oscuro">
                                    {{ $item->rol }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($investigadores as $item)
                    <div class="col-md-3">
                        <div class="card py-4 shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage') . '/' . $item->foto }}" alt="Foto" class="img-invest">
                                <h6 class="text-orange">
                                    {{ $item->nombre }}
                                </h6>
                                <p class="text-gris-oscuro">
                                    {{ $item->rol }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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