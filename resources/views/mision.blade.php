@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Misión - Visión")

@section('content')

<main class="py-5">
    <section class="container px-4 mt-3">
        <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Misión y Visión</h2>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="card shadow p-3" id="card-mision">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="orange-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-flag fa-xl"></i>
                            </div>
                        </div>
                        <h5 class="text-center text-orange">
                            Misión
                        </h5>
                        <p>GESICOM como grupo de investigación tiene la misión de contribuir a incrementar la productividad y competitividad empresarial y sectorial en la región, a través de proyectos formativos teórico-prácticos que estén armonizados al sistema de investigación, desarrollo tecnológico e innovación SENNOVA, para así desarrollar y transferir conocimiento científico y tecnológico aplicable al área de operaciones y producción de bienes y servicios.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow p-3" id="card-mision">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="orange-circle d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-bullseye fa-xl"></i>
                            </div>
                        </div>
                        <h5 class="text-center text-orange">
                            Visión
                        </h5>
                        <p>GESICOM para el 2027 será un referente nacional de investigación aplicada pertinente para el sector empresarial de la región, en los niveles operativos, funcionales y estratégicos de las áreas representadas en las líneas de investigación del grupo.</p>
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