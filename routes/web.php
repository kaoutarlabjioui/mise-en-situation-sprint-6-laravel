<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/store', [TeamController::class, 'store']);
Route::delete('/teams/destroy', [TeamController::class, 'destroy']);
Route::post('/updateForm/{id}', [TeamController::class, 'updateForm']);
Route::post('/update', [TeamController::class, 'update']);
Route::post('/teams/showteam', [TeamController::class, 'showTeams']);
