<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigador;
use App\Models\Rol;
use App\Models\Proyecto;
use App\Models\Articulo;
use App\Models\Libro;
use App\Models\Software;
use App\Models\Semillero;

class HomeController extends Controller
{
    public function index()
    {
        $dinamizadores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Dinamizador SENNOVA')
                                        ->get();
        $lideres = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Líder de grupo de investigación')
                                        ->orWhere('rols.nombre', 'Líder de semillero de investigación')
                                        ->get();
        $instructores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Instructor investigador')
                                        ->orderBy('investigadors.nombre','asc')
                                        ->get();
        $investigadores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Investigador')
                                        ->orderBy('investigadors.nombre','asc')
                                        ->get();
        // dd($investigadores);
        return view('welcome', compact('dinamizadores', 'lideres', 'instructores', 'investigadores'));
    }

    public function irProyectos()
    {
        $proyectosEjecucion = Proyecto::where('Estado', 'Ejecución')
                                            ->orderBy('vigencia', 'desc')
                                            ->get();
        $proyectosTerminados = Proyecto::where('Estado', 'Terminado')
                                            ->orderBy('vigencia', 'desc')
                                            ->get();
        //
        // dd($proyectosTerminados);
        return view('proyectos', compact('proyectosEjecucion', 'proyectosTerminados'));
    }

    public function detalleProyecto($id)
    {
        $proyecto = Proyecto::join('linea_investigacions', 'proyectos.linea_investigacion_id', 'linea_investigacions.id')
                            ->select('proyectos.*', 'linea_investigacions.nombre as linea')
                            ->where('proyectos.id', $id)
                            ->first();
        //
        $investigadores = Investigador::join('investigador_proyectos', 'investigadors.id', 'investigador_proyectos.investigador_id')
                                        ->where('investigador_proyectos.proyecto_id', $id)
                                        ->select('investigadors.*')
                                        ->get();
        $libros = Libro::where('proyecto_id', $id)
                        ->get();
        $articulos = Articulo::where('proyecto_id', $id)
                        ->get();
        $software = Software::where('proyecto_id', $id)
                        ->get();
        // $ponencias = Ponencia::where('proyecto_id', $id)
        //                 ->get();
        // dd($articulos);
        return view('proyectos.detalle', compact('proyecto', 'investigadores', 'articulos', 'libros', 'software'));
    }

    public function verProductos()
    {
        $articulos = Articulo::orderBy('anio', 'desc')->get();
        //
        // dd($proyectosTerminados);
        return view('productos.index', compact('articulos'));
    }

    public function irAcercaDe()
    {
        return view('acercade');
    }

    public function irMision()
    {
        return view('mision');
    }

    public function irEquipoInvestigador()
    {
        $dinamizadores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Dinamizador SENNOVA')
                                        ->get();
        $lideres = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Líder de grupo de investigación')
                                        ->orWhere('rols.nombre', 'Líder de semillero de investigación')
                                        ->get();
        $instructores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Instructor investigador')
                                        ->orderBy('investigadors.nombre','asc')
                                        ->get();
        $investigadores = Investigador::join('rols', 'investigadors.rol_id', 'rols.id')
                                        ->select('investigadors.nombre', 'investigadors.foto', 'rols.nombre as rol')
                                        ->where('rols.nombre', 'Investigador')
                                        ->orderBy('investigadors.nombre','asc')
                                        ->get();
        return view('equipo-investigador', compact('dinamizadores', 'lideres', 'instructores', 'investigadores'));
    }

    public function irEquipoDirectivo()
    {
        return view('equipo-directivo');
    }

    public function verLineas()
    {
        return view('lineas');
    }

    public function verSemillero()
    {
        $noticias = Semillero::orderBy('id', 'desc')->limit(5)->get();
        return view('semillero', compact('noticias'));
    }
}
