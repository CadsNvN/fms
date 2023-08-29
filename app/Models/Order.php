<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\OrderItems;
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
        'status',
        'payment_method',
        'amount_recived',
        'change',
        'payment_date',
        'paid_by'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
