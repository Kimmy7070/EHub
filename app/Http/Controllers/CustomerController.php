<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;

use App\Models\cart;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function customer_index()
    {
        $data = DB::table('products')->get();
        return view('customer.index', compact('data'));
    }

    public function add_to_cart($user_id, $product_id)
    {
        // add to cart backend
        $data = cart::create(['user_id'=>$user_id, 'product_id'=>$product_id]);
        $fetch_product_data = DB::table('products')->where('id','=',$product_id)->get();

        return view('/customer/cart',compact('data', 'fetch_product_data'));
    }

    public function Customer_Error_view()
    {
        return view('customer.error');
    }

    public function Customer_Profile_view()
    {
        return view('customer.profile');
    }

    public function Customer_FAQ_view()
    {
        return view('customer.faq');
    }
}
