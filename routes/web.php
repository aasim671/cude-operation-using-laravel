<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaldataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routes for individual views
Route::get('/create', function () {
    return view('personaldata.create');
});
Route::get('/edit', function () {
    return view('personaldata.edit');
});
Route::get('/index', function () {
    return view('personaldata.index');
});
Route::get('/show', function () {
    return view('personaldata.show');
});

// Resourceful route for PersonaldataController
Route::resource('personaldata', PersonaldataController::class);
