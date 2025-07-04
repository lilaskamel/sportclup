<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProgramController;
use App\Http\Controllers\Api\MucelsController;
use App\Http\Controllers\Api\CoachController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::prefix('member')->group(function () {

    Route::controller(MucelsController::class)->group(function () {
        Route::get('muscles', 'index');
        Route::get('muscles/with-exercises', 'getMucelsWithExercies');
        Route::get('muscles/{id}/exercises', 'showExercies');
    });

    Route::apiResource('/program', ProgramController::class);
});


Route::prefix('coache')->group(function () {
    Route::get('/coach/members', [CoachController::class, 'getMembers']);
    Route::prefix('coach')->middleware('auth:sanctum')->group(function () {
        Route::post('programs', [CoachController::class, 'storeProgram']);
    });
});


Route::post('/login', [AuthController::class, 'login']);
