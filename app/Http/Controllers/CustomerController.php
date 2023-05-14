<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;

use App\Models\cart;
use App\Models\product;

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
        if(cart::where('user_id', $user_id)->where('product_id', $product_id)->exists()){
            $data = DB::table('carts')->where('user_id', $user_id)->where('product_id', $product_id)->increment('cart_quantity');
            return redirect('/customer/cart')->with('success', 'Cart updated successfully');
        }
        else{
            $data = cart::create(['user_id'=>$user_id, 'product_id'=>$product_id]);
            return redirect('/customer/cart')->with('success', 'Product added to cart successfully');
        }
        // $data = cart::create(['user_id'=>$user_id, 'product_id'=>$product_id]);
        // return redirect('/customer/cart')->with('success', 'Product added to cart successfully');
    }

    // public function show_cart()
    // {
    //     $data = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')
    //     ->select('carts.*', 'products.product_name', 'products.product_price', 'products.product_image')
    //     ->where('carts.user_id', Auth::user()->id)->get();
    //     return view('customer.cart', compact('data'));
    // }

    // public function add_to_cart(Request $request)
    // {
    //     $data = new cart;
    //     $data->user_id = Auth::user()->id;
    //     $data->product_id = $request->product_id;
    //     $data->quantity = $request->quantity;
    //     $data->save();
    //     return redirect()->back()->with('success', 'Product added to cart successfully');
    // }

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

    public function product_page($id)
    {
        $data = DB::table('products')->where('id', $id)->get();
        $alldata = DB::table('products')->select('id', 'name', 'category', 'mrp', 'price', 'quantity', 'img1', 'img2', 'img3', 'desc', 'short_desc', 'meta_title', 'meta_desc', 'meta_keyword', 'status', 'created_at', 'updated_at')->get();
        return view('customer.product_page',compact('data','alldata'));
    }

    public function Checkout_Index()
    {
       $data = DB::table('products')->get();
        return view('customer.checkout',compact('data'));
    }
}
