<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\DB;
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/search', [ProductoController::class, 'search']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::get('/test-connection', function () {
    try {
        DB::connection('abrilamoblamientossrv')->getPdo();
        return response()->json(['message' => 'Conexión exitosa']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});