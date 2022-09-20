<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Investigador;
use App\Models\InvestigadorProyecto as InvestigadoresAsociados;

class InvestigadorProyecto extends Component
{

    public $proyecto;
    public $nombreProyecto;
    public $vigenciaProyecto;
    public $investigadores;
    public $investigador;
    public $investigadoresAsociados = [];

    public function mount($proyecto)
    {
        $this->proyecto = $proyecto;
        $this->nombreProyecto = $proyecto->nombre;
        $this->vigenciaProyecto = $proyecto->vigencia;
        $this->investigadores = Investigador::orderBy('nombre', 'asc')->get();
        
    }

    public function render()
    {
        $investigadoresProyecto = InvestigadoresAsociados::where('proyecto_id', $this->proyecto->id)->get();
        $this->investigadoresAsociados = [];
        foreach($investigadoresProyecto as $item)
        {
            $this->investigadoresAsociados[] = Investigador::find($item->investigador_id);
        }

        return view('livewire.investigador-proyecto', [
            "investigadoresAsociados" => $this->investigadoresAsociados
        ]);
    }

    public function add()
    {
        if($this->investigador)
        {
            $investigadorAsociado = new InvestigadoresAsociados();
            $investigadorAsociado->proyecto_id = $this->proyecto->id;
            $investigadorAsociado->investigador_id = $this->investigador;
            $investigadorAsociado->save();
            
            $investigadoresProyecto = InvestigadoresAsociados::where('proyecto_id', $this->proyecto->id)->get();
            foreach($investigadoresProyecto as $item)
            {
                $this->investigadoresAsociados[] = Investigador::findOrFail($item->investigador_id);
            }
        }
    }

    public function delete($id)
    {
        $investigador = InvestigadoresAsociados::find($id);
        $investigador->delete();
        $investigadoresProyecto = InvestigadoresAsociados::where('proyecto_id', $this->proyecto->id)->get();
        foreach($investigadoresProyecto as $item)
        {
            $this->investigadoresAsociados[] = Investigador::findOrFail($item->investigador_id);
        }
    }
}
