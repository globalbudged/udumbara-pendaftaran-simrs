<?php

use App\Events\ChatMessageEvent;
use App\Events\PlaygroundEvent;
use App\Http\Controllers\PercobaanController;
use Illuminate\Http\Request;
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
Route::get('/app', function () {
    return view('app');
});
Route::get('/playground', function () {
    event(new PlaygroundEvent());
    return null;
});
Route::get('/ws', function () {
    return view('websocket');
});

Route::get('/coba', [PercobaanController::class, 'index']);

Route::post('/chat-message', function (Request $request) {
    event(new ChatMessageEvent($request->message));
    return null;
});
