<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherServices extends Model
{
    use HasFactory;

    public function serviceInformation() {
        return $this->belongsTo(ServiceInformation::class);
    }
}
