<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'address', 'city', 'phone', 'cb_number',
        'cb_name', 'cb_code', 'total_price'
    ];

    public function users()
    {
        return $this->belongTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'orders_products');
    }
}
