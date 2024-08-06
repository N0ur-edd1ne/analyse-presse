<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FdjController;
use App\Http\Controllers\ApecController;
use App\Http\Controllers\LhgController;
use App\Http\Controllers\AllianzController;
use App\Http\Controllers\ServierController;
use App\Http\Controllers\CommuniqueController;
use App\Http\Controllers\EtudeController;
use App\Http\Controllers\CommuniqueEtudeController;
use App\Http\Controllers\ExcelLhgController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelAllianzController;
use App\Http\Controllers\ExcelApecController;
use App\Http\Controllers\ExcelFdjController;
use App\Http\Controllers\ExcelServierController;

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

Route::get('/', function () {
    return view('auth/login');
});





//Routes pour l'autentification
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});





//Routes pour les analystes
Route::middleware(['auth', 'user-access:analyst'])->group(function () {
    //Routes pour le dashboard
    Route::get('/analyst-dashboard', [DashboardController::class, 'analystDashboard'])->name('analyst-dashboard');
});





//Routes pour les superviseurs
Route::middleware(['auth', 'user-access:supervisor'])->group(function () {
    //Routes pour le dashboard
    Route::get('/supervisor-dashboard', [DashboardController::class, 'supervisorDashboard'])->name('supervisor-dashboard');

    //Routes pour les utilisateurs
    Route::resource('users', UserController::class);

    //Routes pour les communiques
    Route::resource('communiques', CommuniqueController::class);

    //Routes pour les etudes
    Route::resource('etudes', EtudeController::class);

    //Routes pour l'importation des données excel pour FDJ
    Route::get('excel-fdj/import', [ExcelFdjController::class, 'index']);
    Route::post('excel-fdj/import', [ExcelFdjController::class, 'importExcelData']);

    //Routes pour l'importation des données excel pour Apec
    Route::get('excel-apec/import', [ExcelApecController::class, 'index']);
    Route::post('excel-apec/import', [ExcelApecController::class, 'importExcelData']);

    //Routes pour l'importation des données excel pour LHG
    Route::get('excel-lhg/import', [ExcelLhgController::class, 'index']);
    Route::post('excel-lhg/import', [ExcelLhgController::class, 'importExcelData']);

    //Routes pour l'importation des données excel pour Allianz
    Route::get('excel-allianz/import', [ExcelAllianzController::class, 'index']);
    Route::post('excel-allianz/import', [ExcelAllianzController::class, 'importExcelData']);

    //Routes pour l'importation des données excel pour Servier
    Route::get('excel-servier/import', [ExcelServierController::class, 'index']);
    Route::post('excel-servier/import', [ExcelServierController::class, 'importExcelData']);
});





//Routes pour les communiques et etudes
Route::post('/get-related-study', [CommuniqueEtudeController::class, 'getRelatedStudy'])->name('get.related.study');
Route::post('/get-related-communique', [CommuniqueEtudeController::class, 'getRelatedCommunique'])->name('get.related.communique');
Route::post('/associate-study-to-communique', [CommuniqueEtudeController::class, 'associateStudyToCommunique'])->name('associateStudyToCommunique');
Route::get('/cpetudes', [CommuniqueEtudeController::class, 'index'])->name('cpetudes.index');





//Routes pour FDJ
Route::put('/store-fdj/{id}', [FdjController::class, 'store_fdj'])->name('store_fdj');
Route::get('analyst-fdj-analyse', [FdjController::class, 'fdj']);
Route::post('store_fdj', [FdjController::class, 'store_fdj']);
Route::get('analyst-fdj-list_analyses', [FdjController::class, 'show_fdj']);
Route::get('analyst-fdj-edit_analyse/{id}', [FdjController::class, 'edit_fdj']);
Route::post('update_fdj/{id}', [FdjController::class, 'update_fdj']);
Route::get('analyst-fdj-duplicate_analyse/{id}', [FdjController::class, 'duplicate_fdj']);





//Routes pour APEC
Route::put('/store-apec/{id}', [ApecController::class, 'store_apec'])->name('store_apec');
Route::get('analyst-apec-analyse', [ApecController::class, 'apec']);
Route::post('store_apec', [ApecController::class, 'store_apec']);
Route::get('analyst-apec-list_analyses', [ApecController::class, 'show_apec']);
Route::get('analyst-apec-edit_analyse/{id}', [ApecController::class, 'edit_apec']);
Route::post('update_apec/{id}', [ApecController::class, 'update_apec']);
Route::get('analyst-apec-duplicate_analyse/{id}', [ApecController::class, 'duplicate_apec']);





//Routes pour LHG
Route::put('/store-lhg/{id}', [LhgController::class, 'store_lhg'])->name('store_lhg');
Route::get('analyst-lhg-analyse', [LhgController::class, 'lhg']);
Route::post('store_lhg', [LhgController::class, 'store_lhg']);
Route::get('analyst-lhg-list_analyses', [LhgController::class, 'show_lhg']);
Route::get('analyst-lhg-edit_analyse/{id}', [LhgController::class, 'edit_lhg']);
Route::post('update_lhg/{id}', [LhgController::class, 'update_lhg']);
Route::get('analyst-lhg-duplicate_analyse/{id}', [LhgController::class, 'duplicate_lhg']);





//Routes pour Allianz
Route::put('/store-allianz/{id}', [AllianzController::class, 'store_allianz'])->name('store_allianz');
Route::get('analyst-allianz-analyse', [AllianzController::class, 'allianz']);
Route::post('store_allianz', [AllianzController::class, 'store_allianz']);
Route::get('analyst-allianz-list_analyses', [AllianzController::class, 'show_allianz']);
Route::get('analyst-allianz-edit_analyse/{id}', [AllianzController::class, 'edit_allianz']);
Route::post('update_allianz/{id}', [AllianzController::class, 'update_allianz']);
Route::get('analyst-allianz-duplicate_analyse/{id}', [AllianzController::class, 'duplicate_allianz']);





//Routes pour Servier
Route::put('/store-servier/{id}', [ServierController::class, 'store_servier'])->name('store_servier');
Route::get('analyst-servier-analyse', [ServierController::class, 'servier']);
Route::post('store_servier', [ServierController::class, 'store_servier']);
Route::get('analyst-servier-list_analyses', [ServierController::class, 'show_servier']);
Route::get('analyst-servier-edit_analyse/{id}', [ServierController::class, 'edit_servier']);
Route::post('update_servier/{id}', [ServierController::class, 'update_servier']);
Route::get('analyst-servier-duplicate_analyse/{id}', [ServierController::class, 'duplicate_servier']);





//Routes pour les get data
Route::get('/analyst-fdj-analyse', [FdjController::class, 'getData']);
Route::get('/analyst-apec-analyse', [ApecController::class, 'getData']);
Route::get('/analyst-allianz-analyse', [AllianzController::class, 'getData']);
Route::get('/analyst-lhg-analyse', [LhgController::class, 'getData']);
Route::get('/analyst-servier-analyse', [ServierController::class, 'getData']);