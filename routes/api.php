<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('me',function(){
    return [
        'NIS' => 3103120184,
        'Name' => 'Raihan Fathu Muawal',
        'Phone'=> '081228006862',
        'Class' => 'XII RPL 6'
    ];
});

Route::resource('books', BookController::class)->except(
    ['create', 'edit']
);