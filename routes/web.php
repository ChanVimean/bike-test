<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return response()->json([
        'message' => 'LATEST CODE 123',
        'time' => now(),
    ]);
});

Route::get('/version', function () {
    return response()->json([
        'version' => 'web-v1',
        'time' => now(),
    ]);
});

// require __DIR__.'/api.php';
Route::prefix('api')->group(base_path('routes/api.php'));
