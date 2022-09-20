<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software = Software::orderBy("anio", "desc")
                            ->orderBy("titulo", "asc")
                            ->get();
        return view('software.index', compact('software'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('software.insert', compact('proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Software::create( $request->all() );
        return redirect('software')->with('mensaje', 'Software agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $software = Software::findOrFail($id);
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('software.show', compact('proyectos', "software"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $software = Software::findOrFail($id);
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('software.edit', compact('proyectos', "software"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $software = Software::findOrFail($id);
        $software->update($request->all());
        return redirect('software')->with('mensaje', 'Datos guardados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $software = Software::findOrFail($id);
        $software->delete();
        return redirect('software')->with('mensaje', 'Eliminación realizada con éxito');
    }
}
