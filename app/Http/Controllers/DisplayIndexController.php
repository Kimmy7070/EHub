<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;
use App\Models\contactus;
use App\Models\User;

class DisplayIndexController extends Controller
{
    public function Unkown_index()
    {
        $data = DB::table('products')->get();
        // $user_email = Auth::user()->email->get();
        return view ('index', compact('data'));
    }

    public function unknown_allproducts()
    {
        $data = DB::table('products')->get();
        $count = count($data);
        return view('allproducts',compact('data','count'));
    }

    public function unknown_product_page($id)
    {
        $data = DB::table('products')->where('id', $id)->get();
        $alldata = DB::table('products')->select('id', 'name', 'category', 'mrp', 'price', 'quantity', 'img1', 'img2', 'img3', 'desc', 'short_desc', 'meta_title', 'meta_desc', 'meta_keyword', 'status', 'created_at', 'updated_at')->get();
        return view('product_page',compact('data','alldata'));
    }

    public function contactus_backend(Request $request){
        //echo"We all are gandus";
        $data = contactus::create($request->all());

        return redirect('/')->with('success', "Query sent successfully.We will contact you shortly.");
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
        return view('allproducts')->with($data);


    }
}
