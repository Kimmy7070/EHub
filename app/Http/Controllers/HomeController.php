<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;

use App\Http\Models\contactus;

use App\Http\Models\User;

class HomeController extends Controller
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
    public function index()
    {
        return view('admin.admin');
    }

    public function testing(){
        return view ('/admin/admin');
    }

    public function Admin_Contact_Index(){
        $data = DB::table('contactuses')->select('id','name','email','query','created_at')->get();
        return view ('admin.contact', compact('data'));
    }

    public function Admin_Contact_Error(){
        return view ('admin.error');
    }

    public function Admin_Contact_Profile(){
        return view ('admin.profile');
    }

    public function Admin_Contact_FAQ(){
        return view ('admin.faq');
    }

    public function Admin_User_Index(){
        $data = DB::table('users')->select('id','name','email','type','created_at')->get();
        return view ('admin.user', compact('data'));
    }

    public function Admin_User(){
        return view ('admin.user');
    }

    public function Admin_Categories(){
        return view ('admin.categories');
    }

    public function Admin_Product(){
        return view ('admin.product');
    }

    public function Admin_Add_Product(){
        return view ('admin.add_product');
    }
}
