<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\contactus;

class contactus_controller extends Controller
{
    public function contactus_backend_ganja(Request $request){
       //echo"We all are gandus";
       $data = contactus::create($request->all());

       return redirect('/')->with('success', "Query sent successfully.We will contact you shortly.");
    }
}
