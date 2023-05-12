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
}
