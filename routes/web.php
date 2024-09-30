<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighchartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('chart', [HighchartController::class, 'index']);
