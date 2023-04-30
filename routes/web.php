<?php

use Illuminate\Support\Facades\Route;

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

Route::get('contactus_backend_api', [contactus_controller::class, 'contactus_backend_ganja']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/testing', function(){
    //this route is totally for testing purposes
    return view('testing');
});

// Admin view

Route::get('/admin', function(){
    return view('admin.admin');
});

Route::get('/admin/contact', function(){
    return view('/admin/pages-contact');
});

Route::get('/admin/forms', function(){
    return view('/admin/forms-elements');
});

Route::get('/admin/error', function(){
    return view('/admin/pages-error-404');
});

Route::get('/admin/faq', function(){
    return view('/admin/pages-faq');
});

Route::get('/admin/tables', function(){
    return view('admin.tables-data');
});

Route::get('/admin/user', function(){
    return view('/admin/users-profile');
});


Route::get('/admin/layout', function(){
    return view ('/admin/layout');
});
