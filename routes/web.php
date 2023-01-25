<?php

use App\Http\Controllers\ProjectController;
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

Route::post('/project/create',[ProjectController::class, 'create']);

Route::get('/projects/read/{id}', [ProjectController::class,'read']);
Route::get('/projects/all', [ProjectController::class,'all']);
Route::get('/projects/edit/{id}', [ProjectController::class,'edit']);
Route::put('/projects/update/{id}', [ProjectController::class,'update']);
Route::get('/projects/delete/{id}', [ProjectController::class,'delete']);




Route::get('/', function () {
    return view('welcome');
});
