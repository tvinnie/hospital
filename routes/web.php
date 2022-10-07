<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified');

Route::get('/add_doctor_view', [AdminController::class, 'addDoctor']);
Route::post('/upload_doctor',[AdminController::class,'uploadDoctorData']);
Route::get('/show_appointment',[AdminController::class,'show_appointment']);
Route::get('/approved/{id}',[AdminController::class,'approved_appointment']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showDoctor', [AdminController::class,'showDoctor']);
Route::get('/delete/{id}',[AdminController::class,'deleteDoctor']);
Route::get('/update/{id}',[AdminController::class,'updateDoctor']);
Route::post('/editDoctor/{id}',[AdminController::class,'editDoctor']);
Route::get('/emailView/{id}',[AdminController::class,'emailView']);
Route::post('/sendEmail/{id}',[AdminController::class,'sendEmail']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
