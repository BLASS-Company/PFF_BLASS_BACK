<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'image', 'price', 'stock', 'measure_unit'
    ];
 
    public function categories()
    {
        return $this->belongsToMany(Category::class,'categories_products');
    
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orders_products');
    }
}
