<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SubMainController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('login');
})->middleware('AfterLogin');

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
// Route::get('/subscription', [FrontEndController::class, 'subscription'])->name('subscription'); 
// Route::get('/admin_page', [FrontEndController::class, 'admin_page'])->name('admin_page');
// Route::get('/profile_edit', [FrontEndController::class, 'profile_edit'])->name('profile_edit');
// Route::get('/registration', [FrontEndController::class, 'registration'])->name('registration');
// Route::get('/login', [FrontEndController::class, 'login'])->name('login');


// AuthController

Route::get('/registration', [AuthController::class, 'registration'])->name('registration')->middleware('AfterLogin');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('AfterLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/doctor', [AuthController::class, 'doctor'])->name('doctor')->middleware('NotLogin');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/doctor/profile_edit/{id}', [AuthController::class, 'profile_edit'])->name('profile_edit');
Route::get('/login_profile_edit/{id}', [AuthController::class, 'login_profile_edit'])->name('login_profile_edit');
Route::put('/update/doctor/{id}',[AuthController::class,'update_doctor'])->name('update.doctor');
Route::put('/login_update/doctor/{id}',[AuthController::class,'login_update_doctor'])->name('login_update_doctor');
// Route::post('/search',[AuthController::class,'search'])->name('search');
Route::get('/subscription/{d_id}', [AuthController::class, 'subscription'])->name('subscription');
Route::get('/subscription_info/{id}', [AuthController::class, 'subscription_info']);
Route::post('/subscription_add', [AuthController::class, 'subscription_add'])->name('subscription_add');





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
Route::get('/edit_drug/{id}', [MainController::class, 'edit_drug']);
Route::put('/update_drug', [MainController::class, 'update_drug'])->name('update_drug');
Route::delete('/delete_drug', [MainController::class, 'delete_drug'])->name('delete_drug');

Route::get('/get_drug_info/{p_id}', [MainController::class, 'get_drug_info']);
Route::post('/prescription_add/{d_id}/{t_id}/{t_plans}', [MainController::class, 'prescription_add'])->name('prescription_add'); 
Route::delete('/prescription_delete', [MainController::class, 'prescription_delete'])->name('prescription_delete');
 

// SubMainController

Route::post('/chife_complaint', [SubMainController::class, 'chife_complaint'])->name('chife_complaint');
Route::get('/edit_chife_complaint/{id}', [SubMainController::class, 'edit_chife_complaint']);
Route::put('/update_chife_complaint', [SubMainController::class, 'update_chife_complaint'])->name('update_chife_complaint');
Route::delete('/delete_chife_complaint', [SubMainController::class, 'delete_chife_complaint'])->name('delete_chife_complaint');

Route::post('/clinical_finding', [SubMainController::class, 'clinical_finding'])->name('clinical_finding');
Route::get('/edit_clinical_finding/{id}', [SubMainController::class, 'edit_clinical_finding']);
Route::put('/update_clinical_finding', [SubMainController::class, 'update_clinical_finding'])->name('update_clinical_finding');
Route::delete('/delete_clinical_finding', [SubMainController::class, 'delete_clinical_finding'])->name('delete_clinical_finding');

Route::post('/investigation', [SubMainController::class, 'investigation'])->name('investigation');
Route::get('/edit_investigation/{id}', [SubMainController::class, 'edit_investigation']);
Route::put('/update_investigation', [SubMainController::class, 'update_investigation'])->name('update_investigation');
Route::delete('/delete_investigation', [SubMainController::class, 'delete_investigation'])->name('delete_investigation');

Route::post('/treatment_plan', [SubMainController::class, 'treatment_plan'])->name('treatment_plan');
Route::get('/edit_treatment_plan/{id}', [SubMainController::class, 'edit_treatment_plan']);
Route::put('/update_treatment_plan', [SubMainController::class, 'update_treatment_plan'])->name('update_treatment_plan');
Route::delete('/delete_treatment_plan', [SubMainController::class, 'delete_treatment_plan'])->name('delete_treatment_plan');

Route::post('/medicine_add', [SubMainController::class, 'medicine_add'])->name('medicine_add');
Route::get('/edit_medicine/{id}', [SubMainController::class, 'edit_medicine']);
Route::put('/update_medicine', [SubMainController::class, 'update_medicine'])->name('update_medicine');
Route::delete('/delete_medicine', [SubMainController::class, 'delete_medicine'])->name('delete_medicine');

// AdminController

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::delete('/delete_doctor', [AdminController::class, 'delete_doctor'])->name('delete_doctor');
Route::get('/doctor_status/{id}', [AdminController::class, 'doctor_status'])->name('doctor_status');
Route::get('/subscription_status/{id}', [AdminController::class, 'subscription_status'])->name('subscription_status');
 
// Route::post('/admin/medicine_add', [AdminController::class, 'medicine_add'])->name('medicine_add');

// Route::put('/admin/update_medicine', [AdminController::class, 'update_medicine'])->name('update_medicine');
// Route::delete('/admin/delete_medicine', [AdminController::class, 'delete_medicine'])->name('delete_medicine');


