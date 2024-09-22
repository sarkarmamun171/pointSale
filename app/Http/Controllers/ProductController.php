<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function __construct()
    {
      $this->product = new Product();
    }
    public function product_index(){
        $categories = Category::all();
        return view('admin.product.product-index',[
            'categories'=>$categories,
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
    }
}
