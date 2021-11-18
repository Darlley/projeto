<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/about', function () {
    return view('about');
});
Route::get('/contents/{id}', function ($id = 1) {
    return view('content', ['id' => $id]);
});

Route::get('/', [EventController::class, 'index']);
Route::get('/contents/', [EventController::class, 'contents']);

route::post('/events', [EventController::class, 'store']);
route::get('/events/create', [EventController::class, 'create']);
route::get('/events/{id}', [EventController::class, 'show']);