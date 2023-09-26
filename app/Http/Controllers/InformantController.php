<?php

namespace App\Http\Controllers;

use App\Models\Informant;
use Illuminate\Http\Request;
use App\Models\ServiceInformation;

class InformantController extends Controller
{
    public function store(Request $request, $serviceId) {
        // dd($request->all());

        $validated = $request->validate([
            'firstName' => 'required|max:255',
            'middleName' => 'nullable|max:255',
            'lastName' => 'required|max:255',
            'age' => 'nullable|integer',
            'address' => 'required',
            'occupation' => 'nullable|max:255',
            'telePhoneNo' => 'nullable|max:255',
            'cellPhoneNo' => 'required|max:255',
            'relationshipToTheDeceased' => 'nullable|max:255',
        ]);

        $created = Informant::updateOrCreate($validated);

        if ($created) {
            $serviceInfo = ServiceInformation::find($serviceId);
            $serviceInfo->informant_id = $created->id;
            $serviceInfo->save();
            return redirect()->route('service.other-services', $serviceId)->with('success', 'Saved! now please choose your inclusions');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, please try again');
        }


    }
}
