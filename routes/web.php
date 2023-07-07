<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
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

// Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    return redirect('/report');
});

Route::get('all_reports', [App\Http\Controllers\ReportsController::class, 'display']);

Route::resource('cardiometabolic_report', 'App\Http\Controllers\CardiometabolicreportsController');
// Route::get('cardiometabolic_report/show', 'App\Http\Controllers\CardiometabolicreportsController@show');
Route::get('cardiometabolic_report/show_report/{id}', 'App\Http\Controllers\CardiometabolicreportsController@show_report');

Route::resource('report', 'App\Http\Controllers\ReportsController');

Route::resource('patient', 'App\Http\Controllers\PatientsController');

Route::get('/test', [App\Http\Controllers\ReportsController::class, 'test'])->name('test');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'pdf']);

Route::get('/patient', [App\Http\Controllers\PatientsController::class, 'index']);
Route::get('/createpatient', [App\Http\Controllers\PatientsController::class, 'create_patient']);

Route::get('/cardiometabolic_report', [App\Http\Controllers\CardiometabolicreportsController::class, 'index']);

Route::post('/report-store', 'App\Http\Controllers\ReportsController@store')->name('report.store');
Route::get('reports/download-pdf/{id}', 'App\Http\Controllers\ReportController@downloadPDF')->name('reports.download-pdf');
Route::get('cardiometabolic_report/download-pdf/{id}', 'App\Http\Controllers\ReportController@downloadPDF1')->name('cardiometabolic_report.download-pdf');
