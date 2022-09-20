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
                <a class="subtitulo-equipo pb-3 h3 text-decoration-none" href="{{ route('irEquipoInvestigador') }}">Equipo investigador</a>
            </div>
            <div class="col-sm-3 mb-4 text-center">
                <a class="linea-subtitulo-equipo pb-3 h3 text-decoration-none" href="#">Equipo directivo</a>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="text-center">
            <div class="row mb-5 gy-4">
                <div class="col-md-3">
                    <div class="card py-4 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/user.png')}}" alt="Foto" class="img-invest">
                            <h6 class="text-orange">
                                Álvaro Freddy Bermúdez Salazar
                            </h6>
                            <p class="text-gris-oscuro">
                                Subdirector de centro
                            </p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card py-4 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/user.png')}}" alt="Foto" class="img-invest">
                            <h6 class="text-orange">
                                Gloria Inés Urueña Montes
                            </h6>
                            <p class="text-gris-oscuro">
                                Coordinadora de FPI
                            </p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card py-4 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/user.png')}}" alt="Foto" class="img-invest">
                            <h6 class="text-orange">
                                Omar Barragán Caidedo
                            </h6>
                            <p class="text-gris-oscuro">
                                Coordinador académico
                            </p>
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card py-4 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images/user.png')}}" alt="Foto" class="img-invest">
                            <h6 class="text-orange">
                                Yolanda Cárdenas Villararin
                            </h6>
                            <p class="text-gris-oscuro">
                                Coordinadora académica
                            </p>
                        </div>
                    </div>
                </div>                
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