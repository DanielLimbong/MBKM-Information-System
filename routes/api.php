<?php

use App\Http\Controllers\Api\DownloadProposalController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Api\AuthController;
//use App\Http\Controllers\Api\TodoController;
//use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\Api\DownloadController;
// use App\Http\Api\Controllers\Api\DownloadProposalController;
// use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::controller(AuthController::class)->group(function () {
//     Route::post('register', 'register')->name('register');
//     Route::post('login', 'login')->name('login');
// });

Route::post('/postProposal', [\App\Http\Api\Controllers\Api\DownloadProposalController::class, 'postProposal']);
Route::post('/register', [\App\Http\Api\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Api\Controllers\Api\AuthController::class, 'login']);
Route::get('/get', array(\App\Http\Controllers\Api\Controllers\Api\PdfProposalController::class, 'get'));
Route::get('/daftarlaporan', array(\App\Http\Controllers\Api\Controllers\Api\DaftarLaporan::class, 'daftarlaporan'));
Route::post('/postReport',  [\App\Http\Controllers\Api\Controllers\Api\TheWeeklyReport::class, 'postReport']);



// Route::controller(DownloadProposalController::class)->group(function(){
//     route::post('postProposal', 'postProposal')->name('postProposal');
// });
// Route::controller(DownloadController::class)->group(function() {
//     Route::post('insert', 'insert')->name('insert');
//     Route::post('edit', 'edit')->name('edit');
//     Route::delete('delete', 'delete')->name('delete');
// });
