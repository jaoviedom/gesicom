@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Líneas de investigación")

@section('content')
<main class="py-5">
    <section class="mt-5">
        <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Líneas de investigación</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col-1">
                    <img src="{{ asset('images/lem.png') }}" class="img-fluid" alt="LEM">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">LEM</p>
                    <p class="p-no-space text-gris-1 fw-bold">Gestión Logística, empresarial y de mercadeo</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>Línea que aborda el análisis, tendencia y gestión de mercados para la operación empresarial en los eslabones de la cadena de abastecimiento.</p>
            </div>
            <hr>
            <div class="row my-3">
                <div class="col-1">
                    <img src="{{ asset('images/givit.png') }}" class="img-fluid" alt="GIVIT">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">GIVIT</p>
                    <p class="p-no-space text-gris-1 fw-bold">Gestión Informática, virtualización e innovación tecnológica</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>El objetivo de la línea de investigación es describir, comprender, analizar y explicar cómo las nuevas tecnologías de la información se integran en los proceso de administración, operación y gestión de una organización, para ganar productividad y competitividad empresarial y sectorial.</p>
            </div>
            <hr>
            <div class="row my-3">
                <div class="col-1">
                    <img src="{{ asset('images/acaf.png') }}" class="img-fluid" alt="ACAF">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">ACAF</p>
                    <p class="p-no-space text-gris-1 fw-bold">Gestión administrativa, contable y asistencia financiera</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>Línea de investigación que integra, analiza y ejecuta procesos administrativos, contables y financieros con el fin de mejorar los procesos operativos, funcionales y estratégicos de las empresas de la región y que estos a su vez repercutan en la competitividad y rentabilidad de los involucrados.</p>
            </div>
            <hr>
            <div class="row my-3">
                <div class="col-1">
                    <img src="{{ asset('images/tuga.png') }}" class="img-fluid" alt="TUGA">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">TUGA</p>
                    <p class="p-no-space text-gris-1 fw-bold">Gestión turística, gastronómica y hotelera</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>El objetivo de la línea de investigación es diagnosticar y establecer la integración de los servicios turísticos, gastronómicos y hoteleros de la región con el fin de realizar procesos innovadores de talla internacional.</p>
                <hr>
                <div class="row my-3">
                <div class="col-1">
                    <img src="{{ asset('images/depos.png') }}" class="img-fluid" alt="DEPOS">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">DEPOS</p>
                    <p class="p-no-space text-gris-1 fw-bold">Servicios en salud y desarrollo deportivo</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>La línea de investigación aborda el análisis y evaluación de la prestación de los servicios integrales de salud a nivel preventivo, diagnostico terapéutico y de rehabilitación para la población regional, con el fin de mejorar la calidad su calidad de vida.</p>
            </div>
            <hr>
            <div class="row my-3">
                <div class="col-1">
                    <img src="{{ asset('images/ifpi.png') }}" class="img-fluid" alt="IFPI">
                </div>
                <div class="col-3">
                    <p class="h2 text-orange">IFPI</p>
                    <p class="p-no-space text-gris-1 fw-bold">Investigación para la Formación Profesional Integral</p>
                </div>
            </div>
            <div class="row mb-3">
                <p>Realizar acciones enfocadas a brindar recomendaciones para formular la política de formación profesional integral y contribuir a su pertinencia y calidad, con base en el análisis de información y elaboración de estudios e investigaciones, de igual forma, se adelantarán acciones para la gestión del conocimiento generado por la investigación aplicada desarrollada en los Centros.</p>
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