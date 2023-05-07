<?php

use App\Models\categories;
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

##########################################################################
// admin dashboard routes
##########################################################################
Route::get('/', function () {
    return view('index');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('checkout', function () {
    return view('checkout');
});

Route::get('contactus_backend_api', [App\Http\Controllers\contactus_controller::class, 'contactus_backend_ganja']);

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index']); //route for admin access
Route::get('/customer/home', [App\Http\Controllers\CustomerController::class, 'index'])->middleware('is_admin'); //application base route; route for customer access

##########################################################################
// admin dashboard routes ends here
##########################################################################


#####################################################################
// testing route
#####################################################################

// Route::get('/admin/testing', function(){
//     //this route is totally for testing purposes
//     return view('/admin/testing');
// });

// Admin view

#####################################################################
// testing route ends
#####################################################################


Route::get('/admin/profile', function(){
    return view('/admin/profile');
});

Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Index']);

Route::get('/admin/error', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Error']);

Route::get('/admin/profile', [App\Http\Controllers\HomeController::class, 'Admin_Contact_Profile']);

Route::get('/admin/faq', [App\Http\Controllers\HomeController::class, 'Admin_Contact_FAQ']);

##################################################
// user routes

Route::get('/admin/user', [App\Http\Controllers\HomeController::class, 'Admin_User_Index']);

Route::get('/admin/user/delete/{id}', [App\Http\Controllers\HomeController::class, 'user_delete']);

###################################################
// user routes ends here
###################################################

###################################################
// product route
###################################################
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('/admin/add_product', [App\Http\Controllers\ProductController::class, 'create']);

// Route::get('/admin/add_product/add', [App\Http\Controllers\ProductController::class, 'store']);
Route::match(['get','post'], '/admin/add_product/add', [App\Http\Controllers\ProductController::class, 'store']); //for error change to HomeController


Route::get('add_product', [App\Http\Controllers\ProductController::class, 'index']);

// delete route
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

######################################################
// product routes ends
######################################################



######################################################
// categories route
######################################################
Route::get('/admin/categories', [App\Http\Controllers\CategoriesController::class, 'show']);//view categories table page

Route::get('/admin/add_categories', [App\Http\Controllers\CategoriesController::class, 'create']);//backend for uploading add categories data to db

Route::get('/admin/add_categories/form', [App\Http\Controllers\CategoriesController::class, 'add_categories_form_view']);//viewing add categories form page from where categories data has to be filled up in the form.

// categories delete

Route::get('/admin/categories/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete']);

##########################################################
//categories route ends
##########################################################

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





#######################################################################################################################################################################
//////////////                                               Customer side routes starts here              /////////////////////////////////////////////////
// ***********************                                  DO NOT WRITE ANYTHING IN THIS SPACE                               ****************************
// $$$$$$$$$$$$$$$$$$$$$$$$                       IF YOU WRITE THEN YOU WILL STAND RESPONSIBLE FOR ANY DEFECTS $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^                            DO NOT MESS WITH THIS CODE                            $$$$$$$$$$$$$$$$$$$$$$$
#######################################################################################################################################################################


Auth::routes();

Route::get('/customer/home', [App\Http\Controllers\CustomerController::class, 'index']);

Route::get('/customer/error', [App\Http\Controllers\CustomerController::class, 'Customer_Error_view']);

Route::get('/customer/profile', [App\Http\Controllers\CustomerController::class, 'Customer_Profile_view']);

Route::get('/customer/faq', [App\Http\Controllers\CustomerController::class, 'Customer_FAQ_view']);


###############################################################################
// Customer side routes ends here
###############################################################################
