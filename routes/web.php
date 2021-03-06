<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Route
Route::resource('hospitals',HospitalController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('messages',MessageController::class);
Route::resource('profile', ProfileController::class);
Route::resource('faq', FaqController::class);
Route::resource('specialists', SpecialistController::class);

