<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = $category;
        return view('store.pages.single_product')
        ->with('category', $cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Category;
        $cat->category_name = $request->cat_name;
        $cat->category_type = $request->cat_type;
        $cat->pent_cat_id = $request->pent_cat_id;
        $cat->category_desc = $request->cat_desc;
        $cat->slug = $request->slug;
        $cat->tags = $request->tags;
        $cat->icon = $request->icon;
        $cat->save();

        //return view('')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(/* Category $category */)
    {
        $cat = Category::all();
        return view('admin.pages.category.show_category', compact('$cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'cat_name'  => 'required' ,
            'cat_type'  => 'required' ,
            'pent_cat_id'  => 'required' ,
            'cat_desc'  => 'required' ,
            'slug'  => 'required' ,
            'icon'  => 'required'
        ]);
        $cat = Category::find($id);
        $cat ->category_name = $request->get('cat_name');
        $cat->category_type = $request->get('cat_type');
        $cat->pent_cat_id = $request->get('pent_cat_id');
        $cat->category_desc = $request->get('cat_desc');
        $cat->slug = $request->get('slug');
        $cat->icon = $request->get('icon');
        $cat->save();
        return redirect()->route('admin.pages.category.add_category')->with('success', 'Data Updated');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
