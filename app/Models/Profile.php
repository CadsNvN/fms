<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'phoneNumber',
        'address',
    ];

    public function user(): BelongsTo  
    {
        return $this->belongsTo(User::class); 
    }
}
