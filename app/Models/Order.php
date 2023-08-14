<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'total_due',
        'product_id',
        'status'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
