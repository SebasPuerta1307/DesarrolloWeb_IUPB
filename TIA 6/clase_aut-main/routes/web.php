<?php

use App\Http\Controllers\TiposProyectoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluadorController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('docentes', App\Http\Controllers\DocenteController::class);
Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);
Route::resource('evaluadores', App\Http\Controllers\EvaluadorController::class);




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Rutas de CRUD
 * Todas las opciones del Menú
 */
Route::middleware(['auth'])->group(function () {
    Route::resource('tipos_proyecto', TiposProyectoController::class);
    Route::resource('institucion', InstitucionController::class);
    Route::resource('asignaturas', AsignaturaController::class);
    Route::resource('facultad', FacultadesController::class);
    Route::resource('docente', DocenteController::class);
    Route::resource('estudiante', EstudianteController::class);
    Route::resource('evaluador', EvaluadorController::class);
    Route::resource('asignatura', AsignaturaController::class);
    Route::resource('departamento', Departamentocontroller::class);
    Route::resource('programa', ProgramasController::class);

});


require __DIR__.'/auth.php';
