<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::orderBy("anio", "desc")
                            ->orderBy("mes", "desc")
                            ->orderBy("titulo", "asc")
                            ->get();
        return view('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('articulos.insert', compact('proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Articulo::create( $request->all() );
        return redirect('articulos')->with('mensaje', 'Artículo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('articulos.show', compact('proyectos', "articulo"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        $proyectos = Proyecto::orderBy("nombre", "asc")->get();
        return view('articulos.edit', compact('proyectos', "articulo"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->update($request->all());
        return redirect('articulos')->with('mensaje', 'Datos guardados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect('articulos')->with('mensaje', 'Eliminación realizada con éxito');
    }
}
