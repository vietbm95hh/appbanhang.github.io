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
});
