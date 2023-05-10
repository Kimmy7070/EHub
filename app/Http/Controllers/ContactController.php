<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use Illuminate\Http\Request;
use App\Http\Models\contactus;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Admin_Contact_Index(){
        $data = DB::table('contactuses')->select('id','name','email','query','created_at')->get();
        return view ('admin.contact', compact('data'));
    }

    public function delete($id)
    {
        DB::table('contactuses')->where('id', $id)->delete();
        return redirect('/admin/contact')->with('success', "Query deleted successfully.");
    }
}
