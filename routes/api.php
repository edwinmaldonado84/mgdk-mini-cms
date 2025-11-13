<?php

use App\Http\Controllers\Api\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::middleware([
])->group(function () {
    Route::group(['prefix' => 'public'], function () {
        Route::get('articles', ArticlesController::class);
    });
});
