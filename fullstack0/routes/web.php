<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('Product/table',[StudentController::class,'table'])->name('Product.table');
Route::get('Product/form',[StudentController::class,'form'])->name('Product.form');
Route::post('Product/storeform',[StudentController::class,'storeform'])->name('Product.storeform');
Route::get('Product/editform/{id}', [StudentController::class, 'editform'])->name('Product.editform');
Route::post('Product/updateform/{id}', [StudentController::class, 'updateform'])->name('Product.updateform');
Route::get('Product/deleteform/{id}', [StudentController::class, 'deleteform'])->name('Product.deleteform');
