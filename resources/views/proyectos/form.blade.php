<h1 class="py-3">{{ $modo }} Proyecto</h1>
<hr>

@if ( count( $errors ) > 0 )
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="name@example.com" value="{{ isset( $proyecto->nombre ) ? $proyecto->nombre : old('nombre') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Nombre</label>
</div>
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="vigencia" name="vigencia" placeholder="2022" value="{{ isset( $proyecto->vigencia ) ? $proyecto->vigencia : old('vigencia') }}" @if($modo == "Detalle de") readonly @endif min="2014" required>
    <label for="vigencia">Vigencia</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px" @if($modo == "Detalle de") readonly @endif required>{{ isset( $proyecto->descripcion ) ? $proyecto->descripcion : old('descripcion') }}</textarea>
    <label for="descripción">Descripción</label>
</div>
<div class="form-floating mb-3">
    <select class="form-select" id="linea_investigacion_id" aria-label="Floating label select example" name="linea_investigacion_id" @if($modo == "Detalle de") disabled @endif required>
      <option selected value="">Seleccione...</option>
      @foreach ($lineas as $item)
          <option value="{{ $item->id }}" @if(isset($proyecto) && $proyecto->linea_investigacion_id == $item->id) selected @endif>{{ $item->nombre }}</option>
      @endforeach
    </select>
    <label for="estado">Línea de investigación</label>
</div>
<div class="form-floating mb-3">
    <select class="form-select" id="estado" aria-label="Floating label select example" name="estado" @if($modo == "Detalle de") disabled @endif required>
      <option selected value="">Seleccione...</option>
      <option value="Ejecución" @if(isset($proyecto) && $proyecto->estado == "Ejecución") selected @endif>Ejecución</option>
      <option value="Terminado" @if(isset($proyecto) && $proyecto->estado == "Terminado") selected @endif>Terminado</option>
      <option value="Formulado" @if(isset($proyecto) && $proyecto->estado == "Formulado") selected @endif>Formulado</option>
    </select>
    <label for="estado">Estado</label>
</div>

<button class="btn btn-secondary @if($modo == "Detalle de") d-none @endif">Guardar</button>