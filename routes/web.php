<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostularOfertaController;
use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\ExpLaboralController;
use App\Http\Controllers\EstudiosIdiomaController;
use App\Http\Controllers\EnsecController;

use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\AreaLaboralController;
use App\Http\Controllers\AreaCapaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\TipoCapaController;
use App\Http\Controllers\TipoSangreController;
use App\Http\Controllers\TipoSueldoController;
use App\Http\Controllers\SalarioController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ContratoController;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin/index');
})->name('home');

Route::get('estudiante', [EstudianteController::class,'index'])->name('estudiante.index');
Route::get('estudiante/{estudiante}/create', [EstudianteController::class,'create'])->name('estudiante.create');
Route::post('estudiante', [EstudianteController::class,'store'])->name('estudiante.store');
Route::get('estudiante/{estudiante}', [EstudianteController::class,'show'])->name('estudiante.show');
Route::get('estudiante/{estudiante}/edit', [EstudianteController::class,'edit'])->name('estudiante.edit');
Route::put('estudiante/{estudiante}', [EstudianteController::class,'update'])->name('estudiante.update');
Route::delete('estudiante/{estudiante}', [EstudianteController::class,'destroy'])->name('estudiante.destroy');

Route::get('provincia/{id}/provincia', [ProvinciaController::class,'provincia']);

Route::get('/ofertas', [OfertaController::class,'index'])->name('ofertas.index');
Route::get('/ofertas/create', [OfertaController::class,'create'])->name('ofertas.create');
Route::post('/ofertas', [OfertaController::class,'store'])->name('ofertas.store');
Route::get('/ofertas/{ofertas}', [OfertaController::class,'show'])->name('ofertas.show');
Route::get('/ofertas/{ofertas}/edit', [OfertaController::class,'edit'])->name('ofertas.edit');
Route::put('/ofertas/{ofertas}', [OfertaController::class,'update'])->name('ofertas.update');
Route::delete('ofertas/{ofertas}', [OfertaController::class,'destroy'])->name('ofertas.destroy');

Route::get('/postular', [PostularOfertaController::class,'index'])->name('postular.index');
Route::get('/postular/create', [PostularOfertaController::class,'create'])->name('postular.create');
Route::post('/postular', [PostularOfertaController::class,'store'])->name('postular.store');
Route::get('/postular/{postular}', [PostularOfertaController::class,'show'])->name('postular.show');
Route::get('/postular/{postular}/edit', [PostularOfertaController::class,'edit'])->name('postular.edit');
Route::put('/postular/{postular}', [PostularOfertaController::class,'update'])->name('postular.update');
Route::delete('postular/{postular}', [PostularOfertaController::class,'destroy'])->name('postular.destroy');
Route::get('/postular/contrato', [PostularOfertaController::class,'contrato'])->name('postular.contrato');

Route::get('admin', [AdminController::class,'index'])->name('admin.index');
Route::get('admin/create', [AdminController::class,'create'])->name('admin.create');
Route::post('admin', [AdminController::class,'store'])->name('admin.store');
Route::get('admin/{admin}', [AdminController::class,'show'])->name('admin.show');
Route::get('admin/{admin}/edit', [AdminController::class,'edit'])->name('admin.edit');
// Route::get('admin/buscar', [AdminController::class,'buscar'])->name('admin.buscar');
Route::delete('admin/{admin}', [AdminController::class,'destroy'])->name('admin.destroy');

Route::get('reportes/{admin}/admin', [AdminController::class,'imprimir'])->name('reportes.admin');
Route::get('reportes/{estudiante}/estudiante', [EstudianteController::class,'imprimir'])->name('reportes.estudiante');
Route::get('reportes/{reportes}/curriculum', [EstudianteController::class,'curriculum'])->name('reportes.curriculum');
Route::get('reportes/{empresa}/empresa', [EmpresaController::class,'imprimir'])->name('reportes.empresa');
Route::get('reportes/{ofertas}/ofertas', [OfertaController::class,'imprimir'])->name('reportes.ofertas');
Route::get('reportes/graficos', [EmpresaController::class,'graficos'])->name('reportes.graficos');
Route::get('reportes/graficosoferta', [OfertaController::class,'graficos'])->name('reportes.graficos.ofertas');

Route::get('backups/index', [BackupController::class,'index'])->name('backups.index');
Route::get('backups/create', [BackupController::class,'create'])->name('backups.create');

Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index');
Route::get('contacto/{contacto}/create', [ContactoController::class,'create'])->name('contacto.create');
Route::post('contacto', [ContactoController::class,'store'])->name('contacto.store');
Route::get('contacto/{contacto}', [ContactoController::class,'show'])->name('contacto.show');
Route::get('contacto/{contacto}/edit', [ContactoController::class,'edit'])->name('contacto.edit');
Route::put('contacto/{contacto}', [ContactoController::class,'update'])->name('contacto.update');
Route::delete('contacto/{contacto}', [ContactoController::class,'destroy'])->name('contacto.destroy');

Route::get('empresa', [EmpresaController::class,'index'])->name('empresa.index');
Route::get('empresa/{empresa}/create', [EmpresaController::class,'create'])->name('empresa.create');
Route::post('empresa', [EmpresaController::class,'store'])->name('empresa.store');
Route::get('empresa/{empresa}', [EmpresaController::class,'show'])->name('empresa.show');
Route::get('empresa/{empresa}/edit', [EmpresaController::class,'edit'])->name('empresa.edit');
Route::put('empresa/{empresa}', [EmpresaController::class,'update'])->name('empresa.update');
Route::delete('empresa/{empresa}', [EmpresaController::class,'destroy'])->name('empresa.destroy');

Route::get('estudios', [EstudiosController::class,'index'])->name('estudios.index');
Route::get('estudios/create', [EstudiosController::class,'create'])->name('estudios.create');
Route::post('estudios', [EstudiosController::class,'store'])->name('estudios.store');
Route::get('estudios/{estudios}', [EstudiosController::class,'show'])->name('estudios.show');
Route::get('estudios/{estudios}/edit', [EstudiosController::class,'edit'])->name('estudios.edit');
Route::put('estudios/{estudios}', [EstudiosController::class,'update'])->name('estudios.update');
Route::delete('estudios/{estudios}', [EstudiosController::class,'destroy'])->name('estudios.destroy');

Route::get('/admision', [EnsecController::class,'admision'])->name('ensec.admision');
Route::get('/about', [EnsecController::class,'about'])->name('ensec.about');

Route::post('/capacitacion', [CapacitacionController::class,'store'])->name('capacitacion.store');

Route::get('exp_laboral', [ExpLaboralController::class,'index'])->name('exp_laboral.index');
Route::post('exp_laboral', [ExpLaboralController::class,'store'])->name('exp_laboral.store');
Route::get('exp_laboral/{exp_laboral}', [ExpLaboralController::class,'show'])->name('exp_laboral.show');
Route::get('exp_laboral/{exp_laboral}/edit', [ExpLaboralController::class,'edit'])->name('exp_laboral.edit');
Route::put('exp_laboral/{exp_laboral}', [ExpLaboralController::class,'update'])->name('exp_laboral.update');
Route::delete('exp_laboral/{exp_laboral}', [ExpLaboralController::class,'destroy'])->name('exp_laboral.destroy');

Route::post('estudiosidioma', [EstudiosIdiomaController::class,'store'])->name('estudiosidioma.store');
Route::get('estudiosidioma/{estudiosidioma}/edit', [EstudiosIdiomaController::class,'edit'])->name('estudiosidioma.edit');
Route::delete('estudiosidioma/{estudiosidioma}', [EstudiosIdiomaController::class,'destroy'])->name('estudiosidioma.destroy');

# combos
Route::get('combos/academico', [DepartamentoController::class,'academico'])->name('combos.academico');
Route::get('combos/personal', [DepartamentoController::class,'personal'])->name('combos.personal');

Route::post('departamento', [DepartamentoController::class,'store'])->name('departamento.store');
Route::post('provincia', [ProvinciaController::class,'store'])->name('provincia.store');
Route::post('genero', [GeneroController::class,'store'])->name('genero.store');
Route::post('tipo_sangre', [TipoSangreController::class,'store'])->name('tipo_sangre.store');
Route::post('estado_civil', [EstadoCivilController::class,'store'])->name('estado_civil.store');

Route::post('area_laboral', [AreaLaboralController::class,'store'])->name('area_laboral.store');
Route::post('tipo_capa', [TipoCapaController::class,'store'])->name('tipo_capa.store');
Route::post('area_capa', [AreaCapaController::class,'store'])->name('area_capa.store');
Route::post('carrera', [CarreraController::class,'store'])->name('carrera.store');
Route::post('idioma', [IdiomaController::class,'store'])->name('idioma.store');
Route::post('tipo_sueldo', [TipoSueldoController::class,'store'])->name('tipo_sueldo.store');
Route::post('salario', [SalarioController::class,'store'])->name('salario.store');
Route::post('contrato', [ContratoController::class,'store'])->name('contrato.store');

