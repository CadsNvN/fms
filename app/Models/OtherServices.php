<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_information_id',
        'description'
    ];

    public function serviceInformation()
    {
        return $this->belongsTo(ServiceInformation::class);
    }
}