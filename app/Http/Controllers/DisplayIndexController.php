<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class DisplayIndexController extends Controller
{
    public function Unkown_index()
    {
        $data = DB::table('products')->get();
        return view ('index', compact('data'));
    }
}
