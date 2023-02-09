<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
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
    return view('admin.comm.home',['title' => '']);
})->name('home');
Route::prefix('/category')->name('danh_muc.')->group(function () {
    Route::get('/',[categoryController::class, 'index'])->name('home');
    Route::get('/create',[categoryController::class, 'create'])->name('create');
    Route::post('/create',[categoryController::class, 'add'])->name('add');
    Route::get('/edit/{id}',[categoryController::class, 'edit'])->name('edit');
    Route::post('/edit',[categoryController::class,'uploadEdit'])->name('uploadEdit');
    Route::get('/delete/{id}',[categoryController::class, 'delete'])->name('delete');
});
