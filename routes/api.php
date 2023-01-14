<?php

use App\Http\Controllers\LaravelPracticeController;
use App\Models\LaravelPractice;
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
// Route::get('getData', [LaravelPracticeController::class,'index']);
// Route::post('addData', [LaravelPracticeController::class,'store']);
// Route::get('getData/{id?}', [LaravelPracticeController::class,'show']);
// Route::put('updateData/{id?}', [LaravelPracticeController::class,'update']);
// Route::delete('deleteData/{id?}', [LaravelPracticeController::class,'destroy']);

Route::apiResource('LaravelPractice',LaravelPracticeController::class);
