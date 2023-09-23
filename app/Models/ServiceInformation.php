<?php

namespace App\Models;

use App\Models\Casket;
use App\Models\Informant;
use App\Models\DeceasedInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceInformation extends Model
{
    use HasFactory;

    protected $table = 'service_informations';

    protected $fillable = [
        'deceased_information_id',
        'informant_id',
        'casket_id',
        'hearse_id',
        'serviceType'
    ];


    public function informant() {
        return $this->belongsTo(Informant::class);
    }

    public function otherServices() {
        return $this->hasMany(OtherServices::class);
    }

    public function casket() {
        return $this->belongsTo(Casket::class);
    }

    public function hearse() {
        return $this->hasOne(Hearse::class);
    }

    public function deceasedInformation() {
        return $this->hasOne(DeceasedInformation::class);
    }
}
