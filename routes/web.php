<?php

use App\Http\Controllers\SchoolController;
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

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [SchoolController::class, 'index'])->name('index');
});

// Schools route
Route::prefix('admin.schools')->name('admin.')->group(function () {
    Route::get('listagem', [SchoolController::class, 'school'])->name('school.listar');
    Route::get('adicionar', [SchoolController::class, 'formAdicionar'])->name('school.form');
});



/*Route::get('/', function () {
    return view('admin.index');
});*/
