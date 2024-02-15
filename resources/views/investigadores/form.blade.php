<h1 class="py-3">{{ $modo }} Investigador</h1>
<hr>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="name@example.com" value="{{ isset( $investigador->nombre ) ? $investigador->nombre : old('nombre') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Nombre</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Ingrese los datos del investigador" id="descripcion" name="descripcion" style="height: 100px" @if($modo == "Detalle de") readonly @endif required>{{ isset( $investigador->descripcion ) ? $investigador->descripcion : old('descripcion') }}</textarea>
    <label for="descripción">Hoja de vida</label>
</div>
<div class="form-floating mb-3">
    <select class="form-select" id="rol_id" aria-label="Floating label select example" name="rol_id" @if($modo == "Detalle de") disabled @endif required>
      <option selected value="">Seleccione...</option>
      @foreach ($roles as $item)
          <option value="{{ $item->id }}" @if($modo != "Nuevo" && $investigador->rol_id == $item->id) selected @endif>{{ $item->nombre }}</option>
      @endforeach
    </select>
    <label for="estado">Rol</label>
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    @if ( isset( $investigador->foto ) )
        <img class="img-thumbnail img-fluid" src="{{ asset("$investigador->foto") }}" width="100" alt="">
    @endif
    <input class="form-control @if($modo == "Detalle de") d-none @endif" type="file" id="foto" name="foto">
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