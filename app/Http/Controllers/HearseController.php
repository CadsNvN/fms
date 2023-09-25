<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceInformation;

class HearseController extends Controller
{
    public function selectHearse(Request $request, $serviceId) {
        $serviceInformation = ServiceInformation::find($serviceId);

        if ($serviceInformation) {
            $serviceInformation->hearse_id = $request->hearseId;
            $saved = $serviceInformation->save();

            if ($saved) {
                return redirect()->route('service.inclusions', $serviceId);
            } else {
                return redirect()->back()->with('Something went wrong.');
            }
        } else {
            return redirect()->back()->with('Service Not Found');
        }
    }
}
