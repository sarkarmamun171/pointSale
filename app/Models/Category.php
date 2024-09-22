<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['catenamr','status'];

    public function rel_to_product(){
        return $this->belongsTo(Product::class,'cat_id');
    }
}
