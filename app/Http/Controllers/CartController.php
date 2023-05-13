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
        ->select('carts.*', 'products.name','carts.quantity','products.price', 'products.img1', 'products.mrp')
        ->where('carts.user_id', Auth::user()->id)->get();
        return view('customer.cart', compact('data'));
    }

    public function update_cart(Request $request)
    {
        $data = cart::find($request->id);
        $data->quantity = $request->quantity;
        $data->save();
        return redirect('/customer/cart')->with('success', 'Cart updated successfully');
    }
}
