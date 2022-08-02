<?php

use App\Helpers\Routes\RouteHelper;
use App\Http\Controllers\ApiController;
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

Route::post('/login', [ApiController::class, 'authenticate']);
Route::middleware(['jwt.verify'])
->group(function () {
    Route::post('/logout', [ApiController::class, 'logout']);
});

Route::prefix('v1')->group(function () {
    RouteHelper::includeRouteFiles(__DIR__ . '/v1');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
