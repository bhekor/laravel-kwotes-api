<?php

use App\Http\Controllers\KwoteController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('kwotes/{id?}', [KwotesController::class, 'index']);
// Route::post('kwotes/add', [KwotesController::class, 'store']);
// Route::put('kwotes/update/{id}', [KwotesController::class, 'update']);
// Route::delete('kwotes/delete/{id}', [KwotesController::class, 'destroy']);
// Route::get('kwotes/search/{quote}', [KwotesController::class, 'search']);

Route::prefix('v1')->group(function ()
{
    Route::apiResource('kwotes', KwoteController::class);
});