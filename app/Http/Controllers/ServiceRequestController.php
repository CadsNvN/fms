<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function store($serviceId)
    {
        $saved = ServiceRequest::create([
            'user_id' => auth()->user()->id,
            'service_information_id' => $serviceId,
            'requestNumber' => uniqid()
        ]);

        if ($saved) {
            return redirect()->route('service.received', $serviceId)->with('success', 'Service request sent!');
        } else {
            return redirect()->back()->with('error', 'Service request failed! Please try again');
        }
    }

    public function pending()
    {
        return view('service.pending', [
            'serviceRequest' => ServiceRequest::where('status', 'pending')->get()
        ]);
    }
}