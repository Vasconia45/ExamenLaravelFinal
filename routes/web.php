<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'enunciado');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/admin', 'admin')->name('admin')->middleware('admin');

Route::controller('AdminController')->group(function(){
    Route::get('/administracion', 'showAdministracion')->name('showAdministracion');
    Route::get('/showTrips', 'showTrips')->name('showTrips');
    Route::get('/showTripsDrivers', 'showTripsDrivers')->name('showTripsDrivers');

    Route::post('/showTripsDrivers/asign', 'asign')->name('asign');
    Route::delete('/deleteAsign/{id}', 'deleteAsign')->name('deleteAsign');
});

