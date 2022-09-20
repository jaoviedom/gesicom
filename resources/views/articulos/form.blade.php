<h1 class="py-3">{{ $modo }} Artículo</h1>
<hr>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="name@example.com" value="{{ isset( $articulo->titulo ) ? $articulo->titulo : old('titulo') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Título</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="revista" name="revista" placeholder="name@example.com" value="{{ isset( $articulo->revista ) ? $articulo->revista : old('revista') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Revista</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Resúmen" id="resumen" name="resumen" style="height: 100px" @if($modo == "Detalle de") readonly @endif required>{{ isset( $articulo->resumen ) ? $articulo->resumen : old('resumen') }}</textarea>
    <label for="resumen">Resúmen</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="enlace" name="enlace" placeholder="name@example.com" value="{{ isset( $articulo->enlace ) ? $articulo->enlace : old('enlace') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="nombre">Enlace</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="issn" name="issn" placeholder="name@example.com" value="{{ isset( $articulo->issn ) ? $articulo->issn : old('issn') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="issn">ISSN</label>
</div>
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="doi" name="doi" placeholder="name@example.com" value="{{ isset( $articulo->doi ) ? $articulo->doi : old('doi') }}" @if($modo == "Detalle de") readonly @endif>
    <label for="doi">DOI</label>
</div>
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="anio" name="anio" placeholder="name@example.com" value="{{ isset( $articulo->anio ) ? $articulo->anio : old('anio') }}" @if($modo == "Detalle de") readonly @endif required>
    <label for="anio">Año</label>
</div>
<div class="form-floating mb-3">
    <select class="form-select" id="mes" name="mes" aria-label="Floating label select example" value="{{ isset( $articulo->mes ) ? $articulo->mes : old('mes') }}" @if($modo == "Detalle de") disabled @endif required>
      <option value="">Seleccione...</option>
      <option value="Enero" @if($modo != "Nuevo" && $articulo->mes == "Enero") selected @endif>Enero</option>
      <option value="Febrero" @if($modo != "Nuevo" && $articulo->mes == "Febrero") selected @endif>Febrero</option>
      <option value="Marzo" @if($modo != "Nuevo" && $articulo->mes == "Marzo") selected @endif>Marzo</option>
      <option value="Abril" @if($modo != "Nuevo" && $articulo->mes == "Abril") selected @endif>Abril</option>
      <option value="Mayo" @if($modo != "Nuevo" && $articulo->mes == "Mayo") selected @endif>Mayo</option>
      <option value="Junio" @if($modo != "Nuevo" && $articulo->mes == "Junio") selected @endif>Junio</option>
      <option value="Julio" @if($modo != "Nuevo" && $articulo->mes == "Julio") selected @endif>Julio</option>
      <option value="Agosto" @if($modo != "Nuevo" && $articulo->mes == "Agosto") selected @endif>Agosto</option>
      <option value="Septiembre" @if($modo != "Nuevo" && $articulo->mes == "Septiembre") selected @endif>Septiembre</option>
      <option value="Octubre" @if($modo != "Nuevo" && $articulo->mes == "Octubre") selected @endif>Octubre</option>
      <option value="Noviembre" @if($modo != "Nuevo" && $articulo->mes == "Noviembre") selected @endif>Noviembre</option>
      <option value="Diciembre" @if($modo != "Nuevo" && $articulo->mes == "Diciembre") selected @endif>Diciembre</option>
    </select>
    <label for="mes">Mes</label>
  </div>
  <div class="form-floating mb-3">
    <select class="form-select" id="proyecto_id" aria-label="Floating label select example" name="proyecto_id" @if($modo == "Detalle de") disabled @endif required>
      <option selected value="">Seleccione...</option>
      @foreach ($proyectos as $item)
          <option value="{{ $item->id }}" @if($modo != "Nuevo" && $articulo->proyecto_id == $item->id) selected @endif>{{ $item->nombre }}</option>
      @endforeach
    </select>
    <label for="estado">Proyecto asociado</label>
</div>
<button class="btn btn-secondary @if($modo == "Detalle de") d-none @endif">Guardar</button>