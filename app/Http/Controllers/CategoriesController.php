<?php

namespace App\Http\Controllers;

use DB;

use Auth;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::table('categories')->select('id', 'cat_name', 'cat_status', 'created_at')->get();
        return view('admin.add_categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //for add_categories
        $fetch_data = categories::create($request->all());
        return redirect('/admin/categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $data = DB::table('categories')->where('cat_name', 'LIKE', '%' . $search .'%')->get();
        } else {
            $data = DB::table('categories')->select('id', 'cat_name', 'cat_status', 'created_at')->get();
        }
        $data = compact('data', 'search');
        // return view ('admin.categories', compact('data'));
        return view('admin.categories')->with($data);
    }

    public function add_categories_form_view()
    {
        return view('admin.add_categories');
    }

    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('/admin/categories');
    }
}
