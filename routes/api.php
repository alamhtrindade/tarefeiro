<?php

use Illuminate\Support\Facades\Route;
use App\Application\Controllers\Controller as BaseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::name('TaskManager.')->group(function () {
    Route::get('status', [BaseController::class, 'healthCheck']);

    Route::prefix('exemplo/')->group(function (){
        Route::get('exemplo', [ExemploController::class, 'exemplo'])->name('exemplo');
    });
});
