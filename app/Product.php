<?php

namespace App;

use App\Brand; 
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'image', 'stock', 'brand_id', 'category_id', 'price'];

    public function brand() 
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
