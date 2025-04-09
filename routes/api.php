<?php

use App\Http\Controllers\api\ItemsApiController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::controller(ItemsApiController::class)->group(function() {
        Route::get('/items', 'index');
    });
});

