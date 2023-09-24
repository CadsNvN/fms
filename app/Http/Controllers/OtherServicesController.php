<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceInformation;

class OtherServicesController extends Controller
{
    public function store(Request $request, $serviceId) {

        // dd($request->all());

        $validated = $request->validate([
            'description' => 'required'
        ]);

        $serviceInformation = ServiceInformation::find($serviceId);

        $saved = $serviceInformation->otherServices()->create([
            'description' => $validated['description']
        ]);

        if($saved) {
            return redirect()->route('service.summary', $serviceId);
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }

    }
}
