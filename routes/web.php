<?php

use App\Http\Controllers\AdminLteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DatatablesController;

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

Route::post("/file/upload", [FileController::class, 'upload']);
Route::get("/datatable", [DatatablesController::class, "index"]);
Route::get("/ajax/datatable", [DatatablesController::class, "getAjax"])->name("datatables.data");
