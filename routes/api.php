<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['message' => 'welcome to hang'];
});

Route::get('/profile', ProfileController::class);
