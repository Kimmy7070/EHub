<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use App\Models\categories;

use DB;

class ProductController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $data = DB::table('categories')->select('cat_name')->get();
        return view ('admin.add_product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //for add_categories
        $fetch_data = product::create($request->all());

        return view ('admin.product',compact('fetch_data'))->with('success', "product added successfully.");
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
        $Product_data =  DB::table('products')->select(`id`, `name`, `category`, `mrp`, `price`, `quantity`, `img-1`, `img-2`, `img-3`, `desc`, `short-desc`, `meta-title`, `meta-desc`, `meta-keyword`, `status`, `created_at`)->get();
        // return view ('admin.categories', compact('data'));
        return view('admin.product',compact('Product_data'));
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
