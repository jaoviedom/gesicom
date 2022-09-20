@extends('layouts.gestion.layout')

@section("titulo", "Nuevo proyecto")

@section("content")
    
    <form action="{{ route('proyectos.store') }}" method="post" class="needs-validation" novalidate>
        @csrf
        @include('proyectos.form', [ 'modo' => 'Nuevo' ])
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