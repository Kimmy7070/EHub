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

    // public function testing(){
    //     return view ('/admin/home');
    // }

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

    public function Admin_User_Index(Request $request){
        //->orwhere('type' , 'LIKE', '%' . $search .'%') type search code

        $search = $request['search'] ?? "";
        if ($search != "") {
            $data = DB::table('users')->where('name', 'LIKE', '%' . $search .'%')->orwhere('email', 'LIKE', '%' . $search .'%')->get();
        } else {
            $data = DB::table('users')->select('id','name','email','is_admin','is_customer','created_at')->get();
        }
        $data = compact('data', 'search');
        return view ('admin.user')->with($data);
    }

    public function user_delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/user');
    }
    public function Admin_User(){
        return view ('admin.user');
    }




}
