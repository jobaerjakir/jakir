<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CateController;
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

Route::get('/add_cate', [CateController::class, 'show']);
Route::post('/add_cate', [CateController::class, 'store']);

Route::get('/show_cate', [CateController::class, 'show']);

Route::get('/delete/{id}', [CateController::class, 'delete']);
Route::get('/update/{id}', [CateController::class, 'update']);
Route::post('/edit_cate/{id}', [CateController::class, 'edit']);