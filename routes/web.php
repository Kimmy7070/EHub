<?php

use Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('contactus_backend_api', [contactus_controller::class, 'contactus_backend_ganja']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/testing', function(){
    //this route is totally for testing purposes
    return view('testing');
});

// Admin view

Route::get('/admin', function(){
    return view('/admin/admin');
});

Route::get('/admin/profile', function(){
    return view('/admin/profile');
});

Route::get('/admin/contact', function(){
    return view('/admin/contact');
});

Route::get('/admin/error', function(){
    return view('/admin/error');
});

Route::get('/admin/faq', function(){
    return view('/admin/faq');
});

Route::get('/admin/contactus', function(){
    return view('/admin/contactus');
});

