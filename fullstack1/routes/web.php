<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MNCController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Manager/table',[MNCController::class,'table'])->name('Manager.table');
Route::get('Manager/insert',[MNCController::class,'web'])->name('Manager.insert');
Route::post('Manager/store',[MNCController::class,'store'])->name('Manager.store');
Route::get('Manager/edit/{id}', [MNCController::class, 'edit'])->name('Manager.edit');
Route::post('Manager/update/{id}', [MNCController::class, 'update'])->name('Manager.update');
Route::get('Manager/destroy/{id}', [MNCController::class, 'destroy'])->name('Manager.destroy');
