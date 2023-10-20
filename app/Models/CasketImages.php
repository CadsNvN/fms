<?php

namespace App\Models;

use App\Models\Casket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CasketImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'casket_id',
        'pathImages'
    ];

    public function casket() {
        return $this->belongsTo(Casket::class);
    }
}
