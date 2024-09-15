<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_index(){
        return view('admin.category.category-index');
    }
}
