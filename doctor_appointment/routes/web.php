<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Models\Patient;
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

Route::get('/',[PatientController::class,'index']);

Route::get('/patient/create',[PatientController::class,'create'])->name('patient.create');

Route::post('/patient',[PatientController::class,'store']);

Route::get('/patient',[PatientController::class,'view']);

Route::get('/patient/destroy/{id}',[PatientController::class,'destroy'])->name('patient.destroy');

Route::get('/patient/edit/{id}',[PatientController::class,'edit']);

Route::put('/patient/update/{id}',[PatientController::class,'update'])->name('patient.update');



