<?php

namespace App\Http\Controllers;

use App\Models\order;
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
        $order->save();
        $message = 'Your order has been placed successfully';
        return redirect('/customer/home')->with($message);
        // ->route('order.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        $data = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id')
        ->select('carts.*', 'products.name','products.quantity','products.price', 'products.img1', 'products.mrp')
        ->where('carts.user_id', Auth::user()->id)->get();

        // $cart_id = DB::table('carts')->select('id')->where('user_id', Auth::user()->id)->get();
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
}
