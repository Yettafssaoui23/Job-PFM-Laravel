<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerRegisterController;
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

// Les Emplois

Route::get('/jobs/create',[JobController::class,'create'])->name('job.create');

Route::post('/jobs/create',[JobController::class,'store'])->name('job.store');

Route::get('/jobs/{id}/edit',[JobController::class,'edit'])->name('job.edit');

Route::post('/jobs/{id}/edit',[JobController::class,'update'])->name('job.update');

Route::get('/jobs/my-job',[JobController::class,'myjob'])->name('my.job');

Route::get('/jobs/applications',[JobController::class,'applicant'])->name('applicant');

Route::get('/jobs/alljobs',[JobController::class,'allJobs'])->name('alljobs');

Route::get('/',[JobController::class, 'index']);

Route::get('/jobs/{id}/{job}',[JobController::class,'show'])->name('jobs.show');

// Entreprise Section 

Route::get('/company/{id}/{company}',[CompanyController::class,'index'])->name('company.index');

Route::get('company/create',[CompanyController::class,'create'])->name('company.view');

Route::post('company/create',[CompanyController::class,'store'])->name('company.store');

Route::post('company/coverphoto',[CompanyController::class,'coverPhoto'])->name('cover.photo');

Route::post('company/logo',[CompanyController::class,'companyLogo'])->name('company.logo');

// Accueil Section

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// User Profile

Route::get('user/profile',[UserController::class,'index'])->name('user.profile');

Route::post('user/profile/create',[UserController::class,'store'])->name('profile.create');

Route::post('user/coverletter',[UserController::class,'coverletter'])->name('cover.letter');

Route::post('user/resume',[UserController::class,'resume'])->name('resume');

Route::post('user/avatar',[UserController::class,'avatar'])->name('avatar');


// Employeur view
Route::view('employer/register','auth.employer-register')->name('employer.register');

Route::post('employer/register',[EmployerRegisterController::class,'employerRegister'])->name('emp.register');

Route::post('/applications/{id}',[JobController::class,'apply'])->name('apply');