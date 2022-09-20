<h1 class="py-3">{{ $modo }} Libro</h1>
<hr>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="name@example.com" value="{{ isset( $libro->titulo ) ? $libro->titulo : old('titulo') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Título</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Resúmen" id="resumen" name="resumen" style="height: 100px" @if($modo == "Detalle de") readonly @endif required>{{ isset( $libro->resumen ) ? $libro->resumen : old('resumen') }}</textarea>
    <label for="resumen">Resúmen</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="enlace" name="enlace" placeholder="name@example.com" value="{{ isset( $libro->enlace ) ? $libro->enlace : old('enlace') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Enlace</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="issn" name="isbn" placeholder="name@example.com" value="{{ isset( $libro->isbn ) ? $libro->isbn : old('issn') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="issn">ISBN</label>
</div>
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="anio" name="anio" placeholder="name@example.com" value="{{ isset( $libro->anio ) ? $libro->anio : old('anio') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="anio">Año</label>
</div>
<div class="form-floating mb-3">
    <select class="form-select" id="proyecto_id" aria-label="Floating label select example" name="proyecto_id" @if($modo == "Detalle de") disabled @endif required>
      <option selected value="">Seleccione...</option>
      @foreach ($proyectos as $item)
          <option value="{{ $item->id }}" @if($modo != "Nuevo" && $libro->proyecto_id == $item->id) selected @endif>{{ $item->nombre }}</option>
      @endforeach
    </select>
    <label for="estado">Proyecto asociado</label>
</div>
<button class="btn btn-secondary @if($modo == "Detalle de") d-none @endif">Guardar</button>