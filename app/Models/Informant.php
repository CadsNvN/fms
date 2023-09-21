<?php

namespace App\Models;

use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informant extends Model
{
    use HasFactory;

    public function serviceInformation() {
        return $this->belongsTo(ServiceInformation::class);
    }
}