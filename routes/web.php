<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Mail\ContactanosMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::controller(CursoController::class)->group(function () {
    //     Route::get('cursos', 'index')->name('Cursoindex');
    //     Route::get('cursos/create', 'create')->name('CursoCreate');
    //     Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
//     Route::get('cursos/{curso}', 'show')->name('CursoShow');
//     Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('Cursos.edit');
//     Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
//     Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
// });


Route::get('/', HomeController::class)->name('home');
Route::resource('cursos',CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros','nosotros' )->name('nosotros');

Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos.form',[ContactanosController::class,'store'])->name('contactanos.store');

