<?php

namespace App\Models;

use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeceasedInformation extends Model
{
    use HasFactory;

    
    protected $table = 'deceased_informations';

    public function serviceInformation() {
        return $this->belongsTo(ServiceInformation::class);
    }
}
