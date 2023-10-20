<?php

namespace App\Models;

use App\Models\CasketImages;
use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hearse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'coverPhoto'
    ];

    public function hearseImages()
    {
        return $this->hasMany(CasketImages::class);
    }

    public function serviceInformation()
    {
        return $this->hasOne(ServiceInformation::class);
    }
}