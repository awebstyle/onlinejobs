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
