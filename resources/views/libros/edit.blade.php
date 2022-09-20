@extends('layouts.gestion.layout')

@section("titulo", "Editar libro")

@section("content")
    
    <form action="{{ route('libros.update', $libro->id) }}" class="needs-validation my-3" method="POST" novalidate>
        @csrf
        @method("PUT")
        @include('libros.form', [ 'modo' => 'Editar' ])
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