<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class BrandController extends Controller
{
    public function brand_index(){
        $brands = Brand::all();
        return view('admin.brand.brand-index',[
            'brands'=>$brands,
        ]);
    }
    public function brand_store(Request $request){
        $request->validate([
            'brand_name'=>'required',
            'brand_img'=>'required|image',
            'status'=>'required',
        ]);
        if(Brand::where('brand_name',$request->brand_name)->exists()){
            return back()->with('brand','Brand Already Exists');
        }else{
            $img = $request->brand_img;
            $extension = $img->extension();
            $file_name = Str::lower(str_replace('','-',$request->brand_name)).'.'.$extension;
            Image::make($img)->save(public_path('uploads/brand/'.$file_name));
        }
        Brand::insert([
            'brand_name'=>$request->brand_name,
            'brand_img'=>$file_name,
            'status'=>$request->status,
        ]);
        return back();
    }
    public function brand_edit($brand_id){
        $brand_info = Brand::find($brand_id);
       return view('admin.brand.brand-edit',[
        'brand_info'=>$brand_info,
       ]);
    }
    public function brand_update(Request $request){
        $brand = Brand::find($request->brand_id);

        if($request->brand_img == ''){
            Brand::find($request->brand_id)->update([
                'brand_name'=>$request->brand_name,
                'status'=>$request->status,
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('success','Brand updated Successfully!');
        }else{
            $current_img = public_path('uploads/brand/'.$brand->brand_img);
            unlink($current_img);

            $logo = $request->brand_img;
            $extnesion = $logo->extension();
            $file_name = Str::lower(str_replace(' ', '_', $request->brand_name)).'.'.$extnesion;
            Image::make($logo)->save(public_path('uploads/brand/'.$file_name));

            Brand::find($request->brand_id)->update([
                'brand_name'=>$request->brand_name,
                'brand_img'=>$file_name,
                'status'=>$request->status,
                'updated_at'=>Carbon::now(),
            ]);
            return back()->with('success','Brand updated Successfully!');
        }
    }
    public function brand_delete($id){
        Brand::find($id)->delete();
        return back();
    }
}
