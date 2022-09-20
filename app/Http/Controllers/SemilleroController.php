<?php

namespace App\Http\Controllers;

use App\Models\Semillero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SemilleroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semilleros = Semillero::orderBy("id", "desc")
                            ->get();
        return view('semilleros.index', compact('semilleros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semilleros.insert');
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
        if( $request->hasFile('imagen') ) {
            $datos['imagen'] = $request->file('imagen')->store( 'uploads', 'public' );
        }
        Semillero::create( $datos );
        return redirect()->route('semilleros.index')->with('mensaje', 'Noticia agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semillero  $semillero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semillero = Semillero::findOrFail($id);
        return view('semilleros.show', compact('semillero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semillero  $semillero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semillero = Semillero::findOrFail( $id );
        return view('semilleros.edit', compact( 'semillero' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semillero  $semillero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semillero = Semillero::findOrFail( $id );
        $datos = request()->except( ['_token', '_method'] );
        if( $request->hasFile('imagen') ) {
            Storage::delete( 'public/' . $semillero->foto );
            $datos['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }
        $semillero->update($datos);
        return redirect()->route('semilleros.index')->with('mensaje', 'Datos guardados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semillero  $semillero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semillero = Semillero::findOrFail( $id );
        $semillero->delete();
        return redirect()->route('semilleros.index')->with('mensaje', 'Eliminación realizada con éxito');
    }
}
