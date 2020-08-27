<?php

namespace App\Helpers;

use App\Category;
use App\Helpers\FileHelper;
use App\SubCategory;

class CategoryHelper
{

    static public function store_category($request)
    {
        // instantiate the event reporting class
        $category              = new Category();
        $category->name        = $request->name;
        $category->icon        = $request->icon;
        $category->description = $request->description;

        
        if ($request->hasFile('avatar')) {// first chech if there is image
            
            $request->validate([
                'image'       => 'image|mimes:png,jpg,jpeg|max:4000',
            ], 
            [
                'image.max' => 'image can not be above 4MB'
            ]);

            $category->avatar = FileHelper::upload_image($request->avatar, 'storage/category_avatars/');
        }

        // 
        try {
            $category->save();

            // get uploaded record
            $result = Category::find($category->id);
            
            return response()->json($result, 200);

        } catch (\Exception $e) {
            
            return response()->json($e, 500);

        }
    }

    static public function store_subcategory($request)
    {

        // instantiate the event reporting class
        $category              = new SubCategory();
        $category->category_id = $request->category_id;
        $category->name        = $request->name;
        $category->icon        = $request->icon;
        $category->description = $request->description;

        
        if ($request->hasFile('avatar')) {// first chech if there is image
            
            $request->validate([
                'image'       => 'image|mimes:png,jpg,jpeg|max:4000',
            ], 
            [
                'image.max' => 'image can not be above 4MB'
            ]);
            
            $category->avatar = FileHelper::upload_image($request->avatar, 'storage/subcategory_avatars/');
        }

        // 
        try {
            $category->save();

            // get uploaded record
            $result = SubCategory::find($category->id);
            
            return response()->json($result, 200);

        } catch (\Exception $e) {
            
            return response()->json($e, 500);

        }
    }

    static public function find($request)
    {

        $category = Category::findOrFail($request->category_id);

        return $category;

    }

    static public function get_all()
    {

        $category = Category::all();

        return $category;

    }

    static public function update($request)
    {

        $category = Category::findOrFail($request->category_id);

        // check for name change
        if(isset($request->name) && $request->name !== null){
            $category->name = $request->name_edit;
        }

        // check for icon change
        if(isset($request->icon) && $request->icon != null){
            $category->icon = $request->icon;
        }

        if ($request->hasFile('avatar')) {// first chech if there is image
            FileHelper::upload_image($request->avatar, 'storage/category_avatars/');
        }

        // check for description change
        if(isset($request->description) && $request->description !== null){
            $category->description = $request->description;
        }

        // 
        try {

            $category->save();

            // get relationaships
            $category = Category::find($category->id);

        } catch (\Exception $e) {

            return response()->json($e, 500);

        }
    }


}

