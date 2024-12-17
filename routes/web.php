<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;

Route::post('/send-notification', [NotificationController::class, 'sendNotification']);
Route::get('/send-test-email', [NotificationController::class, 'sendTestEmail']);


