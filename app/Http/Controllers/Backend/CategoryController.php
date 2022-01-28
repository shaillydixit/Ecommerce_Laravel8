<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function Index(){
        $data = Category::all();
        return view('admin.backend.category.category', compact('data'));
    }

    public function Create(Request $request){

        $image = $request->file('category_image');
        $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
        Image::make($image)->resize(80,80)->save('upload/category' .$name_gen);
        $save_url = 'upload/category' .$name_gen;

        Category::insert([
            'category_name' => $request->category_name,
            'category_image' => $save_url,
        ]);
        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($id){
        $editdata = Category::findOrFail($id);
        return view('admin.backend.category.category_edit', compact('editdata'));
    }

    public function Update(Request $request, $id){
        $old_img = $request->old_image;
        if($request->file('category_image')){
            unlink($old_img);

            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(80, 80)->save('upload/category'.$name_gen);
            $save_url = 'upload/category'.$name_gen;

            Category::findOrFail($id)->update([
                'category_name' => $request->category_name,
                'category_image' => $save_url,
            ]);
            $notification = [
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('category')->with($notification);

            
        }else{
            Category::findOrFail($id)->update([
                'category_name' => $request->category_name,
            ]);
            $notification = [
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('category')->with($notification);
        }
    }

    public function Delete($id){
        $oldimg = Category::findOrFail($id);
        unlink($oldimg->category_image);

        Category::findOrFail($id)->delete();
        return redirect()->back();
    }
}
