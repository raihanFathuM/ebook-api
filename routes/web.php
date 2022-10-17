<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return "Haaalloo.. :>";
});

Route::get('coba1', function(){
    return ['raihan', 'rehan', 'rayhan'];
});

Route::get('coba2', function(){
    return [
        'Nama' => 'Raihan Fathu Muawal',
        'NIS' => 3103120184,
        'Kelas' => 'XII RPL 6'
    ];
});

Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Raihan Fathu Muawal',
            'NIS' => 3103120184,
            'Kelas' => 'XII RPL 6'
        ], 201
    );
});