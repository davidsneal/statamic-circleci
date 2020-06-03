<?php

use Illuminate\Support\Facades\Route;
use Davidsneal\StatamicCircleCi\Http\Controllers;

Route::middleware('web')->name('davidsneal.circleci.')->prefix('circleci')->group(function () {
    Route::get('/', [Controllers\ViewController::class, '__invoke'])->name('index');
    Route::post('/', [Controllers\DeployController::class, '__invoke'])->name('deploy');
});
