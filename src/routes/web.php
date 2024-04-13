<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class ,'index']);
Route::post('/confirm', [TodoController::class, 'check']);
Route::get('/thanks', [TodoController::class, 'store']);
Route::post('/register', [TodoController::class, 'login']);
/*
Route::middleware('auth')->group(function () {
    Route::get('/home', [TodoController::class, 'home']);
});
*/
Route::post('/login', [TodoController::class, 'show']);
Route::get('/admin',[TodoController::class, 'content']);

