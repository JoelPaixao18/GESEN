<?php

use App\Http\Controllers\PainelController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/admin');

// Admin (Painel) routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [PainelController::class, 'index'])->name('index');
});

// Schools route
Route::prefix('admin.schools')->name('admin.')->group(function () {
    Route::get('listagem', [SchoolController::class, 'School'])->name('school.listar');
    Route::get('adicionar', [SchoolController::class, 'create'])->name('school.create');
    //Route::post('adicionar', [SchoolController::class, 'store'])->name('school.store');
    //Route::get('editar', [SchoolController::class, 'edit'])->name('school.edit');
    //Route::put('editar/{id}', [SchoolController::class, 'update'])->name('school.update');
    //Route::delete('excluir/{id}', [SchoolController::class, 'destroy'])->name('school.destroy');
    //Route::get('detalhes/{  id}', [SchoolController::class, 'show'])->name('school.show');
});

// Students route
Route::prefix('admin.students')->name('admin.')->group(function () {
    Route::get('listagem', [StudentsController::class, 'index'])->name('student.listar');
    Route::get('adicionar', [StudentsController::class, 'create'])->name('student.create');
    //Route::post('adicionar', [SchoolController::class, 'storeStudent'])->name('student.store');
    //Route::get('editar', [SchoolController::class, 'editStudent'])->name('student.edit');
    //Route::put('editar/{id}', [SchoolController::class, 'updateStudent'])->name('student.update');
    //Route::delete('excluir/{id}', [SchoolController::class, 'destroy  Student'])->name('student.destroy');
    //Route::get('detalhes/{id}', [SchoolController::class, 'showStudent'])->name('student.show');
});



/*Route::get('/', function () {
    return view('admin.index');
});*/
