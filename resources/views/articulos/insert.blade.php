@extends('layouts.gestion.layout')

@section("titulo", "Nuevo artículo")

@section("content")
    
    <form action="{{ route('articulos.store') }}" method="post" class="my-3 needs-validation" method="POST" novalidate>
        @csrf
        @include('articulos.form', [ 'modo' => 'Nuevo' ])
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