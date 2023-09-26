<?php

namespace App\Models;

use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_information_id',
        'status',
        'requestNumber'
    ];

    public function serviceInformation() {
        return $this->belongsTo(ServiceInformation::class);
    }
}
