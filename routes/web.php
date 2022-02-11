<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
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
    return view('layout');
});

Route::get('/layout', function () {
    return view('layoutFull');
});

Route::get('/transfer', [TransferController::class, 'index'])->name('transfer');
Route::get('/transfer/{id}/find', [TransferController::class, 'find'])->name('find favored'); // rota para quando selecionar o favorecido
Route::post('/transfer/create', [TransferController::class, 'create'])->name('create favored');
Route::post('/transfer/update/{id}', [TransferController::class, 'update'])->name('update favored'); // rota para quando selecionar o favorecido
Route::delete('/transfer/delete/{id}', [TransferController::class, 'delete'])->name('delete favored');