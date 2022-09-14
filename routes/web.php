<?php

use App\Http\Controllers\CrmApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CrmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [MainController::class, 'home']);
    Route::get('/prices', [MainController::class, 'prices']);
    Route::get('/works', [MainController::class, 'works']);
    Route::get('/techs', [MainController::class, 'techs']);

    Route::get('/send-lead', [MainController::class, 'sendLead']);

    Route::get('/crm/login', [CrmController::class, 'crmLogin'])->name('loginForm');
    Route::post('/crm/login', [CrmApiController::class, 'login'])->name('loginAction');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/crm', [CrmController::class, 'leadsList'])->name('leadsList');
});
