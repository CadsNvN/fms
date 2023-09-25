<?php

namespace App\Models;

use App\Models\CasketImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Casket extends Model
{
    use HasFactory;

    public function casketImages() {
        return $this->hasMany(CasketImages::class);
    }

    public function serviceInformation() {
        return $this->hasOne(ServiceInformation::class);
    }
    
}
