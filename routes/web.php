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
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\DisplayIndexController::class, 'Unkown_index']);

Route::get('allproducts', [App\Http\Controllers\DisplayIndexController::class, 'unknown_allproducts']);

Route::get('/product_page/{id}', [App\Http\Controllers\DisplayIndexController::class, 'unknown_product_page']);

Route::get('aboutus', function () {
    return view('aboutus');
});

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('is_admin'); //route for admin access
// Route::get('/customer/home', [App\Http\Controllers\CustomerController::class, 'index'])->middleware('is_customer'); //application base route; route for customer access

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

#####################################################################
//contact us for admin route
#####################################################################
Route::get('/admin/contact', [App\Http\Controllers\ContactController::class, 'Admin_Contact_Index']);

Route::get('/admin/contact/delete/{id}', [App\Http\Controllers\ContactController::class, 'delete']);

#####################################################################
//contact us for admin route ends here
#####################################################################

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

Route::get('update/product/status/{id}', [App\Http\Controllers\ProductController::class, 'status']);

//Route::get('{id}', [App\Http\Controllers\ProductController::class, 'edit']);

//edit route

Route::get('/admin/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit']);

Route::get('edit_product', [App\Http\Controllers\ProductController::class, 'edit_all']);

Route::get('/admin/product/update_quantity/{id}', [App\Http\Controllers\ProductController::class, 'update_quantity']);

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

//not needed
Route::get('/admin/contactus', function(){
    return view('/admin/contactus');
});



Route::get('/admin/table', function(){
    return view('/admin/ref-table-data-elements');
});

Route::get('/admin/form', function(){
    return view('admin.ref-forms-elements');
});

#####################################################################
//cart for admin route
#####################################################################

// Route::get('/admin/cart', function(){
//     return view('/admin/cart');
// });

Route::get('/admin/cart', [App\Http\Controllers\CartController::class, 'Admin_Cart_Index']);

Route::get('/admin/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'delete']);

#####################################################################
//cart for admin route ends here
#####################################################################

#####################################################################
//order for admin route
#####################################################################

Route::get('/admin/order', [App\Http\Controllers\OrderController::class, 'Admin_Order_Index']);

#####################################################################
//order for admin route ends here
#####################################################################

#######################################################################################################################################################################
//////////////                                               Customer side routes starts here              /////////////////////////////////////////////////
// ***********************                                  DO NOT WRITE ANYTHING IN THIS SPACE                               ****************************
// $$$$$$$$$$$$$$$$$$$$$$$$                       IF YOU WRITE THEN YOU WILL STAND RESPONSIBLE FOR ANY DEFECTS $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^                            DO NOT MESS WITH THIS CODE                            $$$$$$$$$$$$$$$$$$$$$$$
#######################################################################################################################################################################

##########################################################################
//contact us for customer route
##########################################################################
Route::get('contactus', function () {
    return view('contactus');
});

Route::get('contactus_backend_api', [App\Http\Controllers\DisplayIndexController::class, 'contactus_backend']);

##########################################################################
//contact us for customer route ends here
##########################################################################

Auth::routes();

Route::get('/customer/home', [App\Http\Controllers\CustomerController::class, 'customer_index'])->middleware('is_customer'); //application base route; route for customer access

Route::get('/customer/index', [App\Http\Controllers\CustomerController::class, 'customer_index'])->middleware('is_customer');

##########################################################################################
// customer cart routes starts here
##########################################################################################

Route::get('/customer/cart/add_to_cart_backend/{user_id}/{product_id}', [App\Http\Controllers\CustomerController::class, 'add_to_cart'])->middleware('is_customer');

Route::get('/customer/cart', [App\Http\Controllers\CartController::class, 'Customer_Cart_Index']);

Route::get('/customer/cart/update_cart/{id}', [App\Http\Controllers\CartController::class, 'update_cart']);

Route::get('/customer/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'delete']);

##########################################################################################
// customer cart routes ends here
##########################################################################################

Route::get('/customer/product_page/{id}', [App\Http\Controllers\CustomerController::class, 'product_page']);

Route::get('/customer/error', [App\Http\Controllers\CustomerController::class, 'Customer_Error_view']);

Route::get('/customer/profile', [App\Http\Controllers\CustomerController::class, 'Customer_Profile_view']);

Route::get('/customer/faq', [App\Http\Controllers\CustomerController::class, 'Customer_FAQ_view']);

##########################################################################################
// customer order us routes starts here
##########################################################################################

Route::get('/customer/checkout/{user_id}/{product_id}', [App\Http\Controllers\OrderController::class, 'buy_now']);

Route::get('/customer/checkout', [App\Http\Controllers\OrderController::class, 'Checkout_Index']);

Route::get('order_backend', [App\Http\Controllers\OrderController::class, 'add_to_order']);

##########################################################################################
// customer order us routes ends here
##########################################################################################

###############################################################################
// Customer side routes ends here
###############################################################################



