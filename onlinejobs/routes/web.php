<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ApplicantsController;

use App\Http\Controllers\FrontController;


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



Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/company', [FrontController::class, 'showCompanies'])->name('company');
Route::get('/jobbycompany/{id}', [FrontController::class, 'hiringCompany'])->name('hiringcompany');
Route::get('/jobbycategory/{category}', [FrontController::class, 'jobByCategory'])->name('jobbycategory');
Route::get('/contactus', [FrontController::class, 'contactUs'])->name('contactus');
Route::get('/hiring', [FrontController::class, 'hiring'])->name('hiring');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/advancedsearch', [FrontController::class, 'advancedSearch'])->name('advancedsearch');
Route::get('/applynow/{id}', [FrontController::class, 'applyNow'])->name('applynow');
Route::post('/submit', [FrontController::class, 'submit'])->name('submit');
Route::get('/success', [FrontController::class, 'success'])->name('success');
Route::get('/profile/{id}', [FrontController::class, 'profile'])->name('profile');
Route::post('/profile/{id}/uploadimage', [FrontController::class, 'uploadImage'])->name('uploadimage');
Route::get('/jobbycompany', [FrontController::class, 'jobByCompany'])->name('jobbycompany');
Route::get('/jobbyfunction', [FrontController::class, 'jobByFunction'])->name('jobbyfunction');
Route::get('/jobbytitle', [FrontController::class, 'jobByTitle'])->name('jobbytitle');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/createaccount', [LoginController::class, 'createAccount'])->name('createaccount');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');




Route::get('/jobdetails/{id}', function(){
    return view('front.jobdetails');
})->name('jobdetails');





/* Route::get('/profile/message', function(){
    return view('front.message');
})->name('profilemessage');

Route::get('/profile/message/{id}', function(){
    return view('front.readmessage');
})->name('readmessage');

Route::get('/profile/appliedjob', function(){
    return view('front.appliedjob');
})->name('appliedjob'); */

Route::get('/admin', function(){
    return view('admin.dashboard');
})->name('adminhome');


Route::get('/admin/applicants', function(){
    return view('admin.applicants');
})->name('adminapplicants'); 


Route::get('/admin/users', function(){
    return view('admin.users');
})->name('adminusers');

Route::get('/admin/adduser', function(){
    return view('admin.adduser');
})->name('adduser');

Route::get('/admin/userprofile', function(){
    return view('admin.userprofile');
})->name('userprofile');

Route::resource('companies', CompaniesController::class);
Route::resource('employees', EmployeesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('vacancies', VacanciesController::class);
Route::resource('applicants', ApplicantsController::class);

Route::post('/applicants/{id}/sendmessage', [ApplicantsController::class, 'sendMessage'])->name('sendmessage');
