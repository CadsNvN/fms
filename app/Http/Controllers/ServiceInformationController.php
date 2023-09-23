<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Casket;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\ServiceInformation;
use App\Models\DeceasedInformation;

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
    public function deceased($serviceId)
    {
        return view('service.deceased-info', [
            'serviceId' => $serviceId
        ]);
    }

    public function informant($serviceId)
    {
        return view('service.informant-info', [
            'serviceId' => $serviceId
        ]);
    }

    public function inclusions($serviceId)
    {

        return view('service.inclusions', [
            'serviceId' => $serviceId,
            'serviceInfo' => ServiceInformation::find($serviceId)
        ]);
    }

    public function otherServices($serviceId)
    {
        return view('service.other-services', [
            'serviceId' => $serviceId
        ]);
    }

    public function serviceSummary($serviceId)
    {
        $serviceInformation = ServiceInformation::find($serviceId);

        return view('service.service-summary', [
            'serviceInformation' =>  $serviceInformation,
            'deceasedInformation' =>  $serviceInformation->deceasedInformation,
            'casket' => $serviceInformation->casket,
            'hearse' => $serviceInformation->hearse,
            'informant' => $serviceInformation->informant,
            'otherServices' => $serviceInformation->otherServices
        ]);
    }

    public function caskets($serviceId) {

        return view('service.caskets', [
            'serviceId' => $serviceId,
            'caskets' => Casket::all()
        ]);
    }

    public function hearses($serviceId) {
        return view('service.hearses', [
            'serviceId' => $serviceId
        ]);
    }

    public function flowers($serviceId) {
        return view('service.flowers', [
            'serviceId' => $serviceId
        ]);
    }
}
