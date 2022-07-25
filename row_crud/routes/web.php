<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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

Route::get('/', [testController::class, 'mainView']);
Route::get('add', [testController::class, 'add']);
Route::post('save', [testController::class, 'store']);
Route::get('delete/{id}', [testController::class, 'destroy']);
Route::get('up_form/{id}', [testController::class, 'update_form']);
Route::post('up',[testController::class,'modify']);