<?php

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
    return view('front.home');
})->name('home');

Route::get('/about', function(){
    return view('front.about');
})->name('about');

Route::get('/advancedsearch', function(){
    return view('front.advancedsearch');
})->name('advancedsearch');

Route::get('/company', function(){
    return view('front.company');
})->name('company');

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

Route::get('/jobbycompany/{id}', function(){
    return view('front.hiringcompany');
})->name('hiringcompany');

Route::get('/jobdetails/{id}', function(){
    return view('front.jobdetails');
})->name('jobdetails');

Route::get('/jobbyfunction', function(){
    return view('front.jobbyfunction');
})->name('jobbyfunction');

Route::get('/jobbytitle', function(){
    return view('front.jobbytitle');
})->name('jobbytitle');

Route::get('/jobbycategory', function(){
    return view('front.jobbycategory');
})->name('jobbycategory');

Route::get('/submitapp', function(){
    return view('front.submit');
})->name('submitapp');
