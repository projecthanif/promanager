<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix("auth")->group(function (): void {
    Route::post("login", LoginController::class);
});
