<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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
    return view('login');
});

Route::get('/header', [FrontEndController::class, 'header'])->name('header');
Route::get('/footer', [FrontEndController::class, 'footer'])->name('footer');

Route::get('/appointment', [FrontEndController::class, 'appointment'])->name('appointment');
Route::get('/index', [FrontEndController::class, 'index'])->name('index');
Route::get('/loginForm', [FrontEndController::class, 'loginForm'])->name('loginForm');
Route::get('/patient', [FrontEndController::class, 'patient'])->name('patient');
Route::get('/prescription_list', [FrontEndController::class, 'prescription_list'])->name('prescription_list');
Route::get('/treatment_plan', [FrontEndController::class, 'treatment_plan'])->name('treatment_plan');
Route::get('/treatmentPlans', [FrontEndController::class, 'treatmentPlans'])->name('treatmentPlans'); 


Route::get('/prescription', [FrontEndController::class, 'prescription'])->name('prescription');
Route::get('/subscription', [FrontEndController::class, 'subscription'])->name('subscription'); 
Route::get('/admin_page', [FrontEndController::class, 'admin_page'])->name('admin_page');
// Route::get('/profile_edit', [FrontEndController::class, 'profile_edit'])->name('profile_edit');
// Route::get('/registration', [FrontEndController::class, 'registration'])->name('registration');
// Route::get('/login', [FrontEndController::class, 'login'])->name('login');


// AuthController

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/doctor/{id}', [AuthController::class, 'doctor'])->name('doctor');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/doctor/profile_edit/{id}', [AuthController::class, 'profile_edit'])->name('profile_edit');
Route::get('/login_profile_edit/{id}', [AuthController::class, 'login_profile_edit'])->name('login_profile_edit');
Route::put('/update/doctor/{id}',[AuthController::class,'update_doctor'])->name('update.doctor');
Route::put('/login_update/doctor/{id}',[AuthController::class,'login_update_doctor'])->name('login_update_doctor');
// Route::post('/search',[AuthController::class,'search'])->name('search');



//patient MainController
Route::post('/new/patient/{id}',[MainController::class,'patient_info'])->name('patient_info');
Route::put('edit/patient/{d_id}/{p_id}',[MainController::class,'edit_patient'])->name('edit.patient'); 
Route::delete('delete/patient/{d_id}/{p_id}',[MainController::class,'delete_patient'])->name('delete.patient'); 
//search patient
Route::post('/search/{id}',[MainController::class,'search'])->name('search');
//view_patient
Route::put('/update/patient/{id}',[MainController::class,'update_patient'])->name('update.patient'); 
Route::get('/view/patient/{d_id}/{p_id}',[MainController::class,'view_patient'])->name('view_patient'); //view 
Route::post('/view/patient/{p_id}',[MainController::class,'treatment_info'])->name('treatment_info');

Route::get('/view/patient/treatment/{d_id}/{p_id}/{t_id}/{t_plans}',[MainController::class,'treatments'])->name('treatments');
// Route::post('/view/patient/treatment/{p_id}/{t_id}/{t_plans}',[MainController::class,'treatments'])->name('treatments');

Route::get('/view/patient/prescription/{d_id}/{p_id}',[MainController::class,'prescription'])->name('prescription');
Route::post('/patient/prescription/drug/{d_id}/{p_id}',[MainController::class,'add_drug'])->name('add_drug');


