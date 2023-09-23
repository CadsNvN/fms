<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\DeceasedInformation;
use App\Models\ServiceInformation;
use Illuminate\Validation\ValidationException;

class DeceasedInformationController extends Controller
{
    public function store(Request $request, $serviceId) {
        // dd($request->all());

        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'middleName' => 'string|max:255',
            'lastName' => 'required|string|max:255',
            'dob' => 'required|date',
            'age' => 'integer',
            'sex' => 'required|string|max:10',
            'height' => 'required',
            'weight' => 'required',
            'address' => 'required|string|max:255',
            'occupation' => 'string|max:255',
            'citizenship' => 'string|max:255',
            'religion' => 'string|max:255',
            'civilStatus' => 'string|max:255',
            'fathersName' => 'string|max:255',
            'mothersMaidenName' => 'string|max:255',
            'placeOfDeath' => 'string',
            'timeOfDeath' => 'required',
            'dateOfDeath' => 'required|date',
            'causeOfDeath' => 'required|string|max:255',
            'addressOfCemetery' => 'string',
            'placeOfViewing' => 'string',
            'dateOfInterment' => 'date',
            'timeOfInterment' => 'required',
        ]);

        $created = DeceasedInformation::updateOrCreate($validated);

        if ($created) {
            $serviceInfo = ServiceInformation::find($serviceId);
            $serviceInfo->deceased_information_id = $created->id;
            $serviceInfo->save();
            return redirect()->route('service.informant', $serviceId)->with('success', 'Saved! you can now fill up this form.');
        } else {
            return redirect()->back()->with('error', 'Please try again');
        }
    }
}
