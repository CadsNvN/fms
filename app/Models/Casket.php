<?php

namespace App\Models;

use App\Models\CasketImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Casket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'coverPhoto',
        'category_id'
    ];

    public function casketImages() {
        return $this->hasMany(CasketImages::class);
    }

    public function serviceInformation() {
        return $this->hasOne(ServiceInformation::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_casket', 'casket_id', 'category_id');
    }
    
}
