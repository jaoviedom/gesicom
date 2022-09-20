@extends('layouts.gestion.layout')

@section("titulo", "Editar artículo")

@section("content")
    
    <form action="{{ route('articulos.update', $articulo->id) }}" class="needs-validation my-3" method="POST" novalidate>
        @csrf
        @method("PUT")
        @include('articulos.form', [ 'modo' => 'Editar' ])
    </form>
    
@endsection

@section('scripts')
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection