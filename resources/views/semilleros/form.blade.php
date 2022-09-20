<h1 class="py-3">{{ $modo }} Noticia de Semillero</h1>
<hr>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="name@example.com" value="{{ isset( $semillero->titulo)  ? $semillero->titulo : old('titulo') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Título</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Ingrese los datos del investigador" id="descripcion" name="descripcion" style="height: 100px" @if($modo == "Detalle de") readonly @endif required>{{ isset( $semillero->descripcion ) ? $semillero->descripcion : old('descripcion') }}</textarea>
    <label for="descripción">Descripción</label>
</div>
<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    @if ( isset( $semillero->imagen ) )
        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $semillero->imagen }}" width="50" alt="">
    @else
    <input class="form-control" type="file" id="imagen" name="imagen">
    @endif
    @if ($modo == "Editar")
    <input class="form-control" type="file" id="imagen" name="imagen">
    @endif
</div>
<button class="btn btn-secondary @if($modo == "Detalle de") d-none @endif">Guardar</button>

@section('scripts')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
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