@extends('layouts.main.layout')

@section("titulo", "GESICOM :: Noticias del semillero")

@section('content')
<main class="py-5">
    <section class="row my-5">
        <div class="row pb-3">
            <div class="col-sm-6">
                <h2 class="linea-subtitulo pb-3">Noticias del semillero</h2>
            </div>
        </div>
        <div class="row g-4">
            @foreach ($noticias as $item)
                <div class="col-12">
                    <h3 class="mb-3">{{ $item->titulo }}</h3>
                    <img class="img-fluid" src="{{ asset('storage') . '/' . $item->imagen }}" width="300" alt="">
                    <p>{{ $item->descripcion }}</p>
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