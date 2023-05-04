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
        return view ('admin.add_categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //for add_categories
        $data = categories::create($request->all());
        return redirect('admin.categories')->with('success', "Categories added successfully.");
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
    public function show()
    {
        $data = DB::table('categories')->select('id','cat_name','cat_status','created_at')->get();
        return view ('admin.contact', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        //
    }
}
