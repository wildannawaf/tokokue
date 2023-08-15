<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KueController;

Route::resource('kues', KueController::class);

Route::get('/', function () {
    return view('userview.index'); // Sesuaikan dengan nama file halaman Blade
});

Route::get('/inner', function () {
    return view('userview.inner'); // Sesuaikan dengan nama file halaman Blade
});

