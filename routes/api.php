<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Example route for fetching attendance data
Route::get('/attendance', 'AttendanceController@index');
