<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HearseImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'hearse_id',
        'pathImages'
    ];

    public function casket() {
        return $this->belongsTo(Casket::class);
    }
}
