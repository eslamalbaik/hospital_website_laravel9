<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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

Route::get('/',[ProjectController::class,'getAllDepartments']);
Route::post('/showAppointments', [ProjectController::class,'showAppointments'])->name('showAppointments');
Route::get('/showAppointments', [ProjectController::class,'showAppointments'])->name('showAppointments');
Route::post('/BookAppointments', [ProjectController::class,'BookAppointments'])->name('BookAppointments');
Route::get('/BookAppointments', [ProjectController::class,'BookAppointments'])->name('BookAppointments');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
