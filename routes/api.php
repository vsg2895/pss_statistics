<?php

use App\Http\Controllers\Api\ServiceProviderApi\AttachmentController;
use App\Http\Controllers\Api\ServiceProviderApi\AuthController;
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
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/provider-files/{fileId}', [AttachmentController::class, 'providerFiles']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


