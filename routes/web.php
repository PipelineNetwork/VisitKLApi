<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FungsiController;


Route::get('/', [FungsiController::class, 'user_view_homepage']);

Route::get('/events', [FungsiController::class, 'user_view_events']);
Route::get('/events/{event_id}', [FungsiController::class, 'user_view_event']);
Route::get('/eform', [FungsiController::class, 'user_view_eform']);
Route::post('/eform', [FungsiController::class, 'user_submit_eform']);

Route::get('/admin/events', [FungsiController::class, 'admin_view_events']);
Route::get('/admin/events/{event_id}', [FungsiController::class, 'admin_view_event']);
Route::post('/admin/events', [FungsiController::class, 'admin_create_event']);
Route::put('/admin/events/{event_id}', [FungsiController::class, 'admin_update_event']);
