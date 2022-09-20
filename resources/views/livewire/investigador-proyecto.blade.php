<div>
    <form wire:submit.prevent="add" method="post" class="needs-validation" novalidate>
        @csrf
        <h1 class="my-3">Asociar investigador</h1>
        <hr>
        <h5 class="mb-3">Proyecto:</h5>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model="nombreProyecto" placeholder="name@example.com"  readonly>
            <label for="nombre">Proyecto</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" wire:model="vigenciaProyecto" placeholder="2022"  readonly>
            <label for="vigencia">Vigencia</label>
        </div>
        <hr>
        <div class="form-floating mb-3">
            <select class="form-select" wire:model="investigador" required>
              <option selected value="">Seleccione...</option>
              @foreach ($investigadores as $item)
                  <option value="{{ $item->id }}" >{{ $item->nombre }}</option>
              @endforeach
            </select>
            <label for="estado">Investigadores</label>
        </div>
        <button type="submit" class="btn btn-secondary">Asociar investigador</button>
    </form>
    <hr>
    <h5 class="mb-3">Investigadores asociados:</h5>
    @if (count($investigadoresAsociados) > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($investigadoresAsociados as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>
                    <button wire:click="delete({{ $item->id }})" class="btn btn-danger"  data-bs-toggle="tooltip" data-bs-placement="top" title="Desasociar">
                        <i class="fa-solid fa-link-slash"></i>
                    </button>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    @endif
    
</div>
