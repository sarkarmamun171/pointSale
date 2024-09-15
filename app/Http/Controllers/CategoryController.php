<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class CategoryController extends Controller
{
    protected $category;
    public function __construct(){
        $this->category = new Category();

    }

    public function category_index(){
        $categories = Category::all();
        return view('admin.category.category-index',[
            'categories'=>$categories,
        ]);
    }

    public function category_store(Request $request){
        $request->validate([
            'cate_name'=>'required|unique:categories',
            'cate_img'=>'required|mimes:jpeg,jpg,png,gif|max:1000',
        ]);
        $img = $request->cate_img;
        $extension = $img->extension();
        $file_name = Str::lower(str_replace('','-',$request->cate_name))."-".random_int(1000,99999).".".$extension;
        Image::make($img)->save(public_path('uploads/category/'.$file_name));

        Category::insert([
            'cate_name'=>$request->cate_name,
            'cate_img'=>$file_name,
            'status'=>$request->status,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

}
