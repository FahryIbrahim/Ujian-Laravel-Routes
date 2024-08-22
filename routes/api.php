<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
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

// Retrieve the authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Task 12: Manage tasks with endpoint /api/v1/tasks/*****.
// Keep in mind that prefix should be /api/v1.
Route::prefix('/v1')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});
