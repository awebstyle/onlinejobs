<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\VacanciesController;

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

Route::get('/about', function(){
    return view('front.about');
})->name('about');

Route::get('/advancedsearch', function(){
    return view('front.advancedsearch');
})->name('advancedsearch');

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/company', [FrontController::class, 'showCompanies'])->name('company');
Route::get('/jobbycompany/{id}', [FrontController::class, 'hiringCompany'])->name('hiringcompany');
Route::get('/jobbycategory/{category}', [FrontController::class, 'jobByCategory'])->name('jobbycategory');

Route::get('/contactus', function(){
    return view('front.contactus');
})->name('contactus');

Route::get('/hiring', function(){
    return view('front.hiring');
})->name('hiring');

Route::get('/jobbycompany', function(){
    return view('front.jobbycompany');
})->name('jobbycompany');

Route::get('/jobbycompany', function(){
    return view('front.jobbycompany');
})->name('jobbycompany');



Route::get('/jobdetails/{id}', function(){
    return view('front.jobdetails');
})->name('jobdetails');

Route::get('/jobbyfunction', function(){
    return view('front.jobbyfunction');
})->name('jobbyfunction');

Route::get('/jobbytitle', function(){
    return view('front.jobbytitle');
})->name('jobbytitle');

/* Route::get('/jobbycategory', function(){
    return view('front.jobbycategory');
})->name('jobbycategory'); */

Route::get('/submitapp', function(){
    return view('front.submit');
})->name('submitapp');


Route::get('/register', function(){
    return view('front.register');
})->name('register');

Route::get('/profile', function(){
    return view('front.profile');
})->name('profile');

Route::get('/profile/message', function(){
    return view('front.message');
})->name('profilemessage');

Route::get('/profile/message/{id}', function(){
    return view('front.readmessage');
})->name('readmessage');

Route::get('/profile/appliedjob', function(){
    return view('front.appliedjob');
})->name('appliedjob');

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
