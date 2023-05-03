<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view ('home');
    }

    public function Admin_Contact_Index(){
        return view ('admin.contact');
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
}
