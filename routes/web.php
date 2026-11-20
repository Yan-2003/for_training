<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('version', function () {
    return response()->json(['message' => 'hello']);
});
