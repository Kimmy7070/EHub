<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\contactus;

class DisplayIndexController extends Controller
{
    public function Unkown_index()
    {
        $data = DB::table('products')->get();
        return view ('index', compact('data'));
    }
    public function unknown_checkout()
    {
       $data = DB::table('products')->get();
        return view('customer.checkout',compact('data'));
    }
    public function unknown_allproducts()
    {
        $data = DB::table('products')->get();
        return view('allproducts',compact('data'));
    }

    public function unknown_product_page($id)
    {
        $data = DB::table('products')->where('id', $id)->get();
        $alldata = DB::table('products')->select('id', 'name', 'category', 'mrp', 'price', 'quantity', 'img1', 'img2', 'img3', 'desc', 'short_desc', 'meta_title', 'meta_desc', 'meta_keyword', 'status', 'created_at', 'updated_at')->get();
        return view('product_page',compact('data','alldata'));
    }



    public function contactus_backend_ganja(Request $request){
        //echo"We all are gandus";
        $data = contactus::create($request->all());

        return redirect('/')->with('success', "Query sent successfully.We will contact you shortly.");
     }
}
