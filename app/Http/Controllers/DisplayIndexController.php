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

    public function contactus_backend_ganja(Request $request){
        //echo"We all are gandus";
        $data = contactus::create($request->all());

        return redirect('/')->with('success', "Query sent successfully.We will contact you shortly.");
     }
}
