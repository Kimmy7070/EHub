<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('customer.customer');
    }
    public function Customer_Error_view(){
        return view ('customer.error');
    }

    public function Customer_Profile_view(){
        return view ('customer.profile');
    }

    public function Customer_FAQ_view(){
        return view ('customer.faq');
    }
}
