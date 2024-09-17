<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand_index(){
        return view('admin.brand.brand-index');
    }
    public function brand_store(Request $request){
        $request->validate([
            
        ]);
    }
}
