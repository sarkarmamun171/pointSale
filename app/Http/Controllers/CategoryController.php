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
    public function __construct()
    {
        $this->category = new Category();
    }

    public function category_index()
    {
        $categories = Category::all();
        return view('admin.category.category-index', [
            'categories' => $categories,
        ]);
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'cate_name' => 'required|unique:categories',
            'cate_img' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
        ]);
        $img = $request->cate_img;
        $extension = $img->extension();
        $file_name = Str::lower(str_replace('', '-', $request->cate_name)) . "-" . random_int(1000, 99999) . "." . $extension;
        Image::make($img)->save(public_path('uploads/category/' . $file_name));

        Category::insert([
            'cate_name' => $request->cate_name,
            'cate_img' => $file_name,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    public function category_edit($id)
    {
        $category_info = Category::find($id);
        return view('admin.category.category-edit', [
            'category_info' => $category_info,
        ]);
    }
    public function category_update(Request $request)
    {
        $category = Category::find($request->id);
        if ($request->cate_img == ' ') {
            Category::find($request->id)->update([
                'cate_name' => $request->cate_name,
                'status' => $request->status,
            ]);
        } else {
            $current_img = public_path('uploads/category/' . $category->cate_img);
            unlink($current_img);

            $img = $request->cate_img;
            $extension = $img->extension();
            $file_name = Str::lower(str_replace('', '-', $request->cate_name)) . "-" . random_int(1000, 99999) . "." . $extension;
            Image::make($img)->save(public_path('uploads/category/' . $file_name));

            Category::find($request->id)->update([
                'cate_img' => $file_name,
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
