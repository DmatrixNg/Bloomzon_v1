<?php

namespace App\Http\Controllers\Web\Admin;

use App\Category;
use App\Helpers\CategoryHelper;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.admin.all_categories', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_category(Request $request)
    {
        return view('dashboard.admin.create_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_subcategory(Request $request)
    {
        return view('dashboard.admin.create_subcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_category(Request $request)
    {

        $request->validate([
            'name'        => 'required|unique:categories,name|max:100',
            'icon'        => 'nullable|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        $category =  CategoryHelper::store_category($request);
        if($category){
            return $this->send_response(true,$category,200);
            
        }
        return $this->send_response(false,$category,400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_subcategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id|max:100',
            'name'        => 'required|max:100',
            'icon'        => 'nullable|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        return CategoryHelper::store_subcategory($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_all_catgeory()
    {
        return CategoryHelper::get_all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_subcategory($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_category($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_subcategory($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_ctaegory(Request $request)
    {

        $request->validate([
            'cat_name' => ['required'],
            'cat_id'   => ['required'],
        ]);

        $category = Category::findOrFail($request->cat_id);
        $category->name = $request->cat_name;
        $category->save();
        return redirect()->back();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_subcategory(Request $request)
    {

        $request->validate([
            'sub_cat_name' => ['required'],
            'sub_cat_id'   => ['required'],
        ]);

        $category = SubCategory::findOrFail($request->sub_cat_id);
        $category->name = $request->sub_cat_name;
        $category->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_category($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_subcatgeory($id)
    {
        //
    }
}
