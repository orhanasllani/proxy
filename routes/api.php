<?php

use App\Services\Authenticate;
use App\Services\Beers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [Authenticate::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/beers/get', [Beers::class,'get']);
});
