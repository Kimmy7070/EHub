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

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('contactus_backend_api', [App\Http\Controllers\contactus_controller::class, 'contactus_backend_ganja']);

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index']);



// Route::get('/admin/testing', function(){
//     //this route is totally for testing purposes
//     return view('/admin/testing');
// });

// Admin view

Route::get('/admin/admin', function(){
    return view('/admin/admin');
});

Route::get('/admin/profile', function(){
    return view('/admin/profile');
});

// Route::get('/admin/contact', function(){
//     return view('/admin/contact');
// });

Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Index']);

Route::get('/admin/error', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Error']);

Route::get('/admin/profile', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Profile']);

Route::get('/admin/faq', [App\Http\Controllers\HomeController::class, 'Admin_Contact_FAQ']);

Route::get('/admin/user', [App\Http\Controllers\HomeController::class, 'Admin_User_Index']);

Route::get('/admin/product', [App\Http\Controllers\HomeController::class, 'Admin_Product']);

Route::get('/admin/add_product', [App\Http\Controllers\HomeController::class, 'Admin_Add_Product']);

Route::get('/admin/categories', [App\Http\Controllers\CategoriesController::class, 'show']);

Route::get('add_categories', [App\Http\Controllers\CategoriesController::class, 'create']);

Route::get('/admin/add_categories', [App\Http\Controllers\CategoriesController::class, 'index']);


Route::get('/admin/error', function(){
    return view('/admin/error');
});

Route::get('/admin/faq', function(){
    return view('/admin/faq');
});

Route::get('/admin/contactus', function(){
    return view('/admin/contactus');
});



Route::get('/admin/table', function(){
    return view('/admin/ref-table-data-elements');
});

Route::get('/admin/form', function(){
    return view('admin.ref-forms-elements');
});

// Route::get('/admin/categories', function(){
//     return view('admin.categories');
// });

// Route::get('/admin/add_products', function(){
//     return view('admin.add_products');
// });
