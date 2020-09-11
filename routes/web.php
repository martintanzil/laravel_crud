<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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
    return view('welcome');
});

Route::get('/view', [MenuController::class, 'index'])->name('MenuIndex');
Route::get('/insert',[MenuController::class, 'new'])->name('MenuInsert');
Route::post('/view',[MenuController::class, 'save'])->name('MenuSave');
Route::get('delete/{id}', [MenuController::class, 'delete'])->name('MenuDelete');
Route::post('update/{id}',[MenuController::class, 'update'])->name('MenuUpdate');
Route::get('edit/{id}',[MenuController::class , 'edit'])->name('MenuEdit');
