<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Hello-World', function () {
    return 'Hello-World';
});
Route::get('pengguna/{q}', function ($pengguna) {
    return "Hello-World dari pengguna $pengguna";
});
Route::get('kelas_b/framework/{mhs?}', function ($mhs="anonim") {
    return "Selamat datang $mhs";
});

