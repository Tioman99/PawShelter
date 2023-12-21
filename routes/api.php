<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

echo config('database.default');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User login
Route::post('/login', [AuthController::class, 'login']);

// User registration
Route::post('/register', [AuthController::class, 'register']);

// User logout (requires authentication)
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);

// Get authenticated user details (requires authentication)
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);

