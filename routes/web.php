<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\TheLoginController;
use App\Http\Controllers\EditLaporanController;
use App\Http\Controllers\Fitur\DaftarLaporanController;
use App\Http\Controllers\Fitur\MyactivityController;
use App\Http\Controllers\Fitur\ProgramController;
use App\Http\Controllers\Fitur\SubmitController;
use App\Http\Controllers\Fitur\DashboardController;
use App\Http\Controllers\Fitur\RegistrationStatusController;
use App\Http\Controllers\Fitur\WeeklyReportController;
use App\Http\Controllers\Fitur\DownloadProposalController;
use App\Http\Controllers\Fitur\PdfProposalController;
use App\Http\Controllers\Fitur\ProfileUserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/d', function(){
    return redirect()->route('home');
})->name("getDashboard");

Route::get('/', [DashboardController::class, 'get'])->name("home");

Route::get('/login', [TheLoginController::class, 'get'])->name('getLogin');
Route::post('/actionLogin', [TheLoginController::class, 'actionlogin'])->name("actionlogin");

Route::get('/register', [RegisterController::class, 'get'])->name("getRegister");
Route::post('/store', [RegisterController::class, 'store'])->name("store");

Route::get('/myactivity', [MyactivityController::class, 'get'])->name("getMyactivity");

Route::get('/program', [ProgramController::class, 'get'])->name("getProgram");
//Route::get('{id}/getlaporan', [EditLaporanController::class, 'get'])->name("getlaporan");
Route::get('/getProfile', [ProfileUserController::class, 'getProfile'])->name("getProfile");


Route::get('/submit', [SubmitController::class, 'get'])->name("getSubmit");

Route::get('/registrationstatus', [RegistrationStatusController::class, 'get'])->name("getRegistrationStatus");

Route::get('/weeklyreport', [WeeklyReportController::class, 'get'])->name("getWeeklyReport");
Route::post('/postReport', [WeeklyReportController::class, 'postReport'])->name("postReport");

Route::get('/downloadproposal', [DownloadProposalController::class, 'get'])->name("getDownloadProposal");
Route::post('/postProposal', [DownloadProposalController::class, 'postProposal'])->name("postProposal");


Route::get('/pdfproposal', [PdfProposalController::class, 'get'])->name("getPdfProposal");

Route::get('/dashboard', [DashboardController::class, "getName"])->name("getName");

Route::get('/daftarlaporan', [DaftarLaporanController::class, 'daftarlaporan'])->name("getDaftarLaporan");
Route::get('/editlaporan/{id}', [DaftarLaporanController::class, 'editlaporan'])->name("editlaporan");
Route::post('updateLaporan/{id}', [DaftarLaporanController::class, 'updateLaporan'])->name("updateLaporan");

Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');
