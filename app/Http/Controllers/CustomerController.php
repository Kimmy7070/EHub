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
        // if(cart::where('user_id', $user_id)->where('product_id', $product_id)->doesntExist() || (cart::where('user_id', $user_id)->where('product_id', $product_id)->where('is_ordered', 1)->exists())&&(cart::where('user_id', $user_id)->where('product_id', $product_id)->where('is_ordered', 0)->doesntExist()))
        if(cart::where('user_id', $user_id)->where('product_id', $product_id)->where('is_ordered', 0)->doesntExist())
        {
            $data = cart::create(['user_id'=>$user_id, 'product_id'=>$product_id]);
            return redirect('/customer/cart')->with('success', 'Product added to cart successfully');
        }
        else{
            $data = DB::table('carts')->where('user_id', $user_id)->where('product_id', $product_id)->where('cart_quantity', '<', product::where('id', $product_id)->value('quantity'))->increment('cart_quantity');
            return redirect('/customer/cart')->with('success', 'Cart updated successfully');
        }
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

    public function product_page($id)
    {
        $data = DB::table('products')->where('id', $id)->get();
        $alldata = DB::table('products')->select('id', 'name', 'category', 'mrp', 'price', 'quantity', 'img1', 'img2', 'img3', 'desc', 'short_desc', 'meta_title', 'meta_desc', 'meta_keyword', 'status', 'created_at', 'updated_at')->get();
        return view('customer.product_page',compact('data','alldata'));
    }

    public function show(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $data = DB::table('products')->where('name', 'LIKE', '%' . $search .'%')->orwhere('category' , 'LIKE', '%' . $search .'%')->orwhere('mrp' ,'LIKE', '%' . $search .'%')->get();
        } else {
            $data = DB::table('products')->select('id', 'name', 'category', 'mrp', 'price', 'quantity', 'img1', 'img2', 'img3', 'desc', 'short_desc', 'meta_title', 'meta_desc', 'meta_keyword', 'status', 'created_at', 'updated_at')->get();
        }
        $count = count($data);
        $data = compact('data', 'search' , 'count');
        // echo $search;
        // echo $data;
        // echo $count;
        // return view ('allproducts', compact('data','search','count'));
        return view('customer.allproducts')->with($data);


    }
}
