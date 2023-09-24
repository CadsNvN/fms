<?php

namespace App\Models;

use App\Models\ServiceInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeceasedInformation extends Model
{
    use HasFactory;


    protected $table = 'deceased_informations';

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'dob',
        'age',
        'sex',
        'height',
        'weight',
        'address',
        'occupation',
        'citizenship',
        'religion',
        'civilStatus',
        'fathersName',
        'mothersMaidenName',
        'placeOfDeath',
        'timeOfDeath',
        'dateOfDeath',
        'causeOfDeath',
        'addressOfCemetery',
        'placeOfViewing',
        'dateOfInterment',
        'timeOfInterment',
    ];


    public function serviceInformation()
    {
        return $this->hasOne(ServiceInformation::class);
    }
}