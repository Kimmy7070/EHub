<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;
use App\Http\Models\cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Admin_Cart_Index(){
        $data = DB::table('carts')->select('id','email', 'product_id','created_at')->get();
        return view ('admin.cart', compact('data'));
    }

    public function Customer_Cart_Index()
    {
        $data = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')
        ->select('carts.*', 'products.name','products.quantity','products.price', 'products.img1', 'products.mrp')
        ->where('carts.user_id', Auth::user()->id)->get();

        $cart_id = DB::table('carts')->select('id')->where('user_id', Auth::user()->id)->get();
        return view('customer.cart', compact('data', 'cart_id'));
    }

    public function update_cart($cart_id, Request $request)
    {
        // echo $cart_id;
        $qty = $request['qty'];
        $qt=(int)$qty;
        // echo $qt;
        $data = DB::table('carts')->where('user_id', $cart_id)->update(['cart_quantity'=>$qt]);
        return redirect('/customer/cart')->with('success', 'Cart updated successfully');
    }

    // public function edit_cart($user_id, $product_id)
    // {
    //     // add to cart backend
    //     $data = cart::create(['user_id'=>$user_id, 'product_id',$product_id]);
    //     return redirect('/customer/cart')->with('success', 'Product added to cart successfully');
    // }
}
