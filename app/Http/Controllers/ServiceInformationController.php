<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\ServiceInformation;
use GuzzleHttp\Psr7\Message;

class ServiceInformationController extends Controller
{
    public function index()
    {
        return view('service.service-type');
    }

    public function store(Request $request)
    {
        try {

            $serviceInformation = ServiceInformation::create([
                'deceased_information_id' => null,
                'informant_id' => null,
                'casket_id' => null,
                'hearse_id' => null,
                'serviceType' => $request->service_type
            ]);

            return redirect()->route('service.deceased', $serviceInformation->id)
            ->with('serviceInfo', $serviceInformation);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function deceased($id)
    {
        return view('service.deceased-info', [
            'serviceId' => $id
        ]);
    }

    public function informant()
    {
        return view('service.informant-info');
    }

    public function inclusions()
    {
        return view('service.inclusions');
    }

    public function otherServices()
    {
        return view('service.other-services');
    }

    public function serviceSummary()
    {
        return view('service.service-summary');
    }
}
