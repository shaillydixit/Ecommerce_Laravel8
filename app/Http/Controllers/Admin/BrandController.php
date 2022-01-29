<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
   public function Index(){
       $data = Brand::all();
       return view('admin.backend.brand.brand_view', compact('data'));
   }

   public function Create(Request $request){

    $image = $request->file('brand_image');
    $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
    Image::make($image)->resize(80,80)->save('upload/brand/'.$name_gen);
    $save_url = 'upload/brand/'.$name_gen;
       Brand::insert([
        'brand_name' => $request->brand_name,
        'brand_image' => $save_url,
       ]);

       $notification = [
        'message' => 'Brand Inserted Successfully',
        'alert-type' => 'success',
       ];

       return redirect()->back()->with($notification);
   }

   public function Edit($id){
      $editdata = Brand::findOrFail($id);
      return view('admin.backend.brand.brand_edit', compact('editdata'));

   }

   public function Update(Request $request, $id){
       $old_img = $request->old_image;
       if($request->file('brand_image')){
            unlink($old_img);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(80,80)->save('upload/brand/'.$name_gen);
            $save_url = 'upload/brand/'.$name_gen;

            Brand::findOrFail($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $save_url,
            ]);
            $notification = [
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->route('brand')->with($notification);

       }else{
        Brand::findOrFail($id)->update([
            'brand_name' => $request->brand_name,
        ]);

        $notification = [
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('brand')->with($notification);

       }

   }

        public function Delete($id){
            $data = Brand::findOrFail($id);
            unlink($data->brand_image);
            
            Brand::findOrFail($id)->delete();

            $notification = [
                'message' => 'Brand Deleted Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);
        }
}