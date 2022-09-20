<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GrupoInvestigacionController;
use App\Http\Controllers\InvestigadorController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\SemilleroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name("inicio");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource("grupo", GrupoInvestigacionController::class);
Route::resource("investigadores", InvestigadorController::class);
Route::resource("proyectos", ProyectoController::class);
Route::resource("articulos", ArticuloController::class);
Route::resource("libros", LibroController::class);
Route::resource("software", SoftwareController::class);
Route::resource("semilleros", SemilleroController::class);

Route::get("addInvestigador/{idProyecto}", [ProyectoController::class, 'verAddInvestigador'])->name("proyectos.verAddInvestigador");

Route::get('/ver-proyectos', [HomeController::class, 'irProyectos'])->name("verProyectos");
Route::get('/ver-proyecto/{id}', [HomeController::class, 'detalleProyecto'])->name("detalleProyecto");

Route::get('/ver-productos', [HomeController::class, 'verProductos'])->name("verProductos");

Route::get('/acerca-de', [HomeController::class, 'irAcercaDe'])->name("irAcercaDe");
Route::get('/mision-vision', [HomeController::class, 'irMision'])->name("irMision");
Route::get('/equipo-investigador', [HomeController::class, 'irEquipoInvestigador'])->name("irEquipoInvestigador");
Route::get('/equipo-directivo', [HomeController::class, 'irEquipoDirectivo'])->name("irEquipoDirectivo");
Route::get('/lineas-investigacion', [HomeController::class, 'verLineas'])->name("verLineas");
Route::get('/semillero', [HomeController::class, 'verSemillero'])->name("verSemillero");