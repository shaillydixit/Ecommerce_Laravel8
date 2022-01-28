<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function Index(){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $data = SubCategory::all();
        return view('admin.backend.subcategory.subcategory_view', compact('data', 'categories'));
    }

    public function Create(Request $request){
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
        ]);

        $notification = [
            'message' => 'Subcategory Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function Edit($id){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $editdata = SubCategory::findOrFail($id);
       return view('admin.backend.subcategory.subcategory_edit', compact('editdata', 'categories'));
    }

    public function Update(Request $request, $id){
        SubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
        ]);

        $notification = [
            'message' => 'Subcategory Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('subcategory')->with($notification);
    }

    public function Delete($id){
        SubCategory::findOrFail($id)->delete();

        $notification = [
            'message' => 'Subcategory Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);

    }
}
