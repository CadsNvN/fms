<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'image'
    ];

    public function announcementImages() {
        return $this->hasMany(AnnouncementImage::class);
    }
}
