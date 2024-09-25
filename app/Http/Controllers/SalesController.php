<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales_index(){
        return view('admin.sales.index');
    }
}
