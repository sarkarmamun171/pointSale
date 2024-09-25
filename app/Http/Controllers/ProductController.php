<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    protected $product;
    public function __construct()
    {
      $this->product = new Product();
    }
    public function product_index(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.product-index',[
            'categories'=>$categories,
            'brands'=>$brands,
        ]);
    }
    public function product_store(Request $request){
        $request->validate([
            'product_name'=>'required',
            'price'=>'required',
            'short_desp'=>'required',
            'long_desp'=>'required',
            'additional_info'=>'required',
            'preview'=>'required',
            'price'=>'required',
        ]);
        $preview_img = $request->preview;
        $extension = $preview_img->extension();
        $file_name = Str::lower(str_replace(' ','-',$request->product_name))."-".random_int(100000, 900000)."." .$extension;
        Image::make($preview_img)->save('uploads/preview_img/'.$file_name);

        Product::insert([
            'productname'=>$request->product_name,
            'cat_id'=>$request->category,
            'brand_id'=>$request->brand,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'after_discount'=>$request->price -($request->price * $request->discount/100),
            'short_desp'=>$request->short_desp,
            'long_desp'=>$request->long_desp,
            'additional_info'=>$request->additional_info,
            'preview'=>$file_name,
            'slug'=>Str::lower(str_replace(' ','-',$request->product_name))."-".random_int(10000000, 90000000),
        ]);
        return back()->with('success','Product Added');
    }
    public function product_list(){
        $productLists = Product::all();
        return view('admin.product.product-list',[
            'productLists'=>$productLists,
        ]);
    }
    public function product_edit($id){
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::find($id);
        return view('admin.product.product-edit',[
            'categories'=>$categories,
            'brands'=>$brands,
            'products'=>$products,
        ]);
    }
}
