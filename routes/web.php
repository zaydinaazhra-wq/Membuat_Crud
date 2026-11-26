<?php

use App\Http\Controllers\PelajarController;
use App\Models\Pelajar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('panel')->group(function () {
    Route::get('/dashboard', function () {
        $pelajars = Pelajar::orderBy('id', 'desc')->get();
        return view('backend.dashboard.index', compact('pelajars'));
    });
});

Route::get('/pelajar', [PelajarController::class, 'index']);
Route::get('/pelajar/create', [PelajarController::class, 'create']);
Route::post('/pelajar/create', [PelajarController::class, 'store']);
Route::get('/pelajar/{id}', [PelajarController::class, 'show']);
Route::get('/pelajar/{id}/edit', [PelajarController::class, 'edit']);
Route::put('/pelajar/{id}', [PelajarController::class, 'update']);
Route::delete('/pelajar/{id}', [PelajarController::class, 'destroy']);

