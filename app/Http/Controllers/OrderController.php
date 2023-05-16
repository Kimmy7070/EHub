<?php

namespace App\Http\Controllers;

use DB;
use Auth;

use App\Models\order;
use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_to_order(Request $request)
    {
        $order = new order();
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->address = $request->address;
        $order->zip = $request->zip;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->pm = $request->pm;
        $order->user_id = Auth::user()->id;
        $order->total = $request->total;
        $order->save();

        //data fetching ends here

        if(cart::where('user_id', Auth::user()->id)->where('is_ordered', 0)->exists())
        {
            $data1 = DB::table('carts')->where('user_id', Auth::user()->id)->update(['is_ordered' => 1]);
        }

        //cart updating to ordered ends here

        $product_id = cart::where('user_id', Auth::user()->id)->where('is_ordered', 1)->value('product_id');
        echo $product_id;
        $product_quantity = product::where('id', $product_id)->value('quantity');
        echo $product_quantity;
        $cart_qty = cart::where('user_id', Auth::user()->id)->where('is_ordered', 1)->value('cart_quantity');
        echo $cart_qty;
        $data2 = DB::table('products')->where('id', $product_id)->update(['quantity' => $product_quantity - $cart_qty]);
        // echo $data2;
        // echo ($request);
        // return redirect('/customer/home')->with('success', 'Order placed successfully');
        // ->route('order.create');
    }

    /**
     * Display the specified resource.
     */
    public function Checkout_Index()
    {
        $data = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')
        ->select('carts.*', 'products.name','products.quantity','products.price', 'products.img1', 'products.mrp')
        ->where('carts.user_id', Auth::user()->id)->where('carts.is_ordered', 0)->get();
        return view('customer.checkout', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }

    public function place_order()
    {

    }

     //same code as customer controller but redirects to checkout directly
     public function buy_now($user_id,$product_id)
     {
         if(cart::where('user_id', $user_id)->where('product_id', $product_id)->doesntExist())
         {
             $data = cart::create(['user_id'=>$user_id, 'product_id'=>$product_id]);
             return redirect('/customer/checkout')->with('success', 'Product added to cart successfully');
         }
         else{
             $data = DB::table('carts')->where('user_id', $user_id)->where('product_id', $product_id)->where('cart_quantity', '<', product::where('id', $product_id)->value('quantity'))->increment('cart_quantity');
             return redirect('/customer/checkout')->with('success', 'Cart updated successfully');
         }
     }
}
