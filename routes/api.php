<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\InventoryController;
use App\Http\Controllers\API\PostController;

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
Route::get('/inventory',[InventoryController::class,'index']);

Route::post('login', [InventoryController::class, 'login']);
Route::post('register', [InventoryController::class, 'register']);
Route::post('reset-password', [InventoryController::class, 'resetPassword']);

// POSTS
Route::get('get-all-posts', [PostController::class, 'getAllPosts']);
Route::get('get-post', [PostController::class, 'getPost']);
Route::get('search-post', [PostController::class, 'searchPost']);








