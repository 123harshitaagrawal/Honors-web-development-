<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/songs', function () {
    return "Songs";
});
Route::get('/songs', function () {
    return view('songs');
});
Route::get('/songs', function () {
    $song = new Song();
    $song->setTitle('With You');
    return view('songs', [ 'song' => $song ]);
});
