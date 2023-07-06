<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'fw-block-blocklisted'], function () 
{
    Route::get('coming-soon', function()
    {
        return view('coming-soon');
    });

    Route::group(['middleware' => 'fw-only-allowlisted'], function () 
    {
        Route::get('/', [HomeController::class, 'index']);
    });
});
