<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\ServiceInformation;

class ServiceRequestController extends Controller
{
    public function store($serviceId)
    {
        $serviceInformation = ServiceInformation::find($serviceId);

        $saved = ServiceRequest::create([
            'user_id' => auth()->user()->id,
            'service_information_id' => $serviceId,
            'requestNumber' => uniqid(),
            'totalDue' => $serviceInformation->casket->price
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

    public function process($requestId) {
        return view('service.process-request', [
            'serviceRequest' => ServiceRequest::find($requestId)
        ]);
    }

    public function complete(Request $request, $requestId) {

        $serviceRequest = ServiceRequest::find($requestId);

        if($request->ammountReceived < $serviceRequest->totalDue) {
            return redirect()->back()->with('error', 'Amount received is less than total due!');
        }

        $serviceRequest->status = 'completed';
        $serviceRequest->totalChange = $request->ammountReceived - $serviceRequest->totalDue;
        $serviceRequest->paidBy = $request->firstName . ' ' . $request->lastName;
        $serviceRequest->paymentMethod = $request->paymentMethod;
        $serviceRequest->ammountReceived = $request->ammountReceived;
        $serviceRequest->paymentDate = $request->paymentDate;

        $serviceRequest->save();

        return redirect()->route('service.process', $requestId)->with('success', 'Service request completed!');
    }

    public function completed() {
        return view('service.completed', [
            'serviceRequest' => ServiceRequest::where('status', 'completed')->get()
        ]);
    }
}