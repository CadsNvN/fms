<?php

namespace App\Models;

use App\Models\CasketImages;
use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hearse extends Model
{
    use HasFactory;

    public function hearseImages() {
        return $this->hasMany(CasketImages::class);
    }

    public function serviceInformation() {
        return $this->belongsTo(ServiceInformation::class);
    }
}
