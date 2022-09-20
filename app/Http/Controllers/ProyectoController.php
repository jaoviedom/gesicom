<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\LineaInvestigacion;
use App\Models\Investigador;
use App\Models\InvestigadorProyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::orderBy('vigencia', 'desc')
                            ->orderBy('nombre', 'asc')
                            ->get();
        //
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineas = LineaInvestigacion::all();
        return view('proyectos.insert', compact('lineas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Proyecto::create( $request->all() );
        return redirect('proyectos')->with('mensaje', 'Proyecto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail( $id );
        $lineas = LineaInvestigacion::all();
        return view('proyectos.show', compact('proyecto', 'lineas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $lineas = LineaInvestigacion::all();
        return view('proyectos.edit', compact('proyecto', 'lineas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail( $id );
        $proyecto->update($request->all());
        return redirect('proyectos')->with('mensaje', 'Datos guardados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail( $id );
        $proyecto->delete();
        return redirect('proyectos')->with('mensaje', 'Eliminación realizada con éxito');
    }


    public function verAddInvestigador($id)
    {
        $proyecto = Proyecto::findOrFail( $id );
        return view('proyectos.addInvestigador', compact('proyecto'));
    }
    
}
