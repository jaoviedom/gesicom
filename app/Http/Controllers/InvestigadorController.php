<?php

namespace App\Http\Controllers;

use App\Models\Investigador;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestigadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigadores = Investigador::all();
        return view('investigadores.index', compact('investigadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::orderBy("nombre", "asc")->get();
        return view('investigadores.insert', compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        if( $request->hasFile('foto') ) {
            $datos['foto'] = $request->file('foto')->store( 'uploads', 'public' );
        }
        Investigador::create( $datos );
        return redirect('investigadores')->with('mensaje', 'Investigador agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investigador = Investigador::findOrFail( $id );
        $roles = Rol::orderBy("nombre", "asc")->get();
        return view('investigadores.show', compact( 'investigador', 'roles' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investigador = Investigador::findOrFail( $id );
        $roles = Rol::orderBy("nombre", "asc")->get();
        return view('investigadores.edit', compact( 'investigador', 'roles' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investigador = Investigador::findOrFail( $id );
        $datos = request()->except( ['_token', '_method'] );
        if( $request->hasFile('foto') ) {
            Storage::delete( 'public/' . $investigador->foto );
            $datos['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        $investigador->update($datos);
        return redirect('investigadores')->with('mensaje', 'Datos guardados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigador  $investigador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investigador = Investigador::findOrFail( $id );
        $investigador->delete();
        return redirect('investigadores')->with('mensaje', 'Eliminación realizada con éxito');
    }
}
