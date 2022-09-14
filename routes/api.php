<?php

use App\Http\Controllers\CrmApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/create-lead', [CrmApiController::class, 'createLead']);
Route::get('/get-leads', [CrmApiController::class, 'getLeads']);
Route::get('/update-lead', [CrmApiController::class, 'updateLead']);
Route::get('/remove-lead', [CrmApiController::class, 'removeLead']);
