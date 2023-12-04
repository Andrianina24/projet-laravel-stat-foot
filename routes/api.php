<?php

use App\Http\Controllers\Api\StatController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/attaque', [StatController::class, 'showAttGen']);
Route::get('/defense', [StatController::class, 'showDefGen']);
Route::get('/general', [StatController::class, 'showGenGen']);

Route::get('/general/domicile', [StatController::class, 'showGenDom']);
Route::get('/general/exterieur', [StatController::class, 'showGenExt']);
Route::get('/general/general', [StatController::class, 'showGenGen']);

Route::get('/attaque/domicile', [StatController::class, 'showAttDom']);
Route::get('/attaque/exterieur', [StatController::class, 'showAttExt']);
Route::get('/attaque/general', [StatController::class, 'showAttGen']);

Route::get('/defense/domicile', [StatController::class, 'showDefDom']);
Route::get('/defense/exterieur', [StatController::class, 'showDefExt']);
Route::get('/defense/general', [StatController::class, 'showDefGen']);

