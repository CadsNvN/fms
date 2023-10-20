<?php

namespace App\Models;

use App\Models\Casket;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function caskets(): BelongsToMany
    {
        return $this->belongsToMany(Casket::class, 'category_casket', 'casket_id', 'category_id')->withTimestamps();
    }


}
