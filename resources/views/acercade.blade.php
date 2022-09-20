@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Acerca de nosotros")

@section('content')
<main class="py-5">
    <section class="mt-5">
        <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Acerca de nosotros</h2>
            </div>
        </div>
        <div class="row g-4 pb-3">
            <div class="col-sm-8">
                <p>El grupo de investigación de Gestión Empresarial, Servicios e Innovación Comercial GESICOM del Centro de Comercio y Servicios SENA Regional Tolima, fundado a finales del año 2013 avalado por SENNOVA y reconocido por Colciencias en el año 2014, ha nacido con el objetivo de llevar a cabo acciones de investigación para el fortalecimiento de la competitividad del Centro y de incentivar la cultura del desarrollo científico e innovador en los aprendices, instructores y administrativos, ejecutando proyectos que contribuyan a la región y a la comunidad SENA, enfocado en seis líneas de investigación.</p>
                <p>Actualmente GESICOM cuenta con un equipo de investigadores interdisciplinarios facultados para formular y desarrollar proyectos de innovación e investigación aplicada, en las cuales se han llevado a cabo proyectos con recursos otorgados por SENNOVA y el fondo General de Regalías de Ciencia y Tecnología, para la ejecución de proyectos de impacto local y departamental.</p>
            </div>
            <div class="col-sm-4 mb-3">
                <img src="{{ asset('images/acerca-de.svg') }}" alt="Acerca de nosostros" class="img-fluid">
                <div class="container px-4 mt-3">
                    <div class="row gx-5">
                        <div class="col-4">
                            <div class="radial-mision text-center">
                                <div>100%<br><small>Pensamiento lógico</small></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radial-mision text-center">
                                <div>100%<br><small>Objetividad</small></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radial-mision text-center">
                                <div>100%<br><small>Creatividad</small></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row g-4 pb-3">
            <div class="col-4 px-3">
                <a href="{{ route('irMision') }}" class="text-decoration-none">
                    <div class="row btn-acerca d-flex justify-content-around align-items-top p-3">
                        <div class="col-8 text-orange fw-bold">Misión y visión</div>
                        <div class="col-4"><i class="fa-solid fa-mountain-sun text-orange"></i></div>
                    </div>
                </a>
            </div>
            <div class="col-4 px-3">
                <a href="{{ route('verLineas') }}" class="text-decoration-none">
                    <div class="row btn-acerca d-flex justify-content-around align-items-top p-3">
                        <div class="col-8 text-orange fw-bold">Líneas de investigación</div>
                        <div class="col-4"><i class="fa-solid fa-magnifying-glass text-orange"></i></i></div>
                    </div>
                </a>
            </div>
            <div class="col-4 px-3">
                <a href="{{ route('irEquipoInvestigador') }}" class="text-decoration-none">
                    <div class="row btn-acerca d-flex justify-content-around align-items-top p-3">
                        <div class="col-8 text-orange fw-bold">Equipo de trabajo</div>
                        <div class="col-4"><i class="fa-solid fa-users text-orange"></i></i></div>
                    </div>
                </a>
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