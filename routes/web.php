<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('index');
});

Route::post('/send-email', [NotificationController::class, 'sendEmail']);


