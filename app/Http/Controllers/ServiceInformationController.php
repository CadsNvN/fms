<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Casket;
use App\Models\Hearse;
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

            return redirect()->route('service.inclusions', $serviceInformation->id)
            ->with('serviceInfo', $serviceInformation);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($serviceId) {
        $serviceInformation = ServiceInformation::find($serviceId);

        if(!$serviceInformation) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $deleted = $serviceInformation->delete();

        if(!$deleted) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->route('service.type.index');
    }

    public function setGallonsOfWater(Request $request, $serviceId) {
        // dd($request->all());
        $serviceInformation = ServiceInformation::find($serviceId);

        if(!$serviceInformation) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        if (!$serviceInformation->casket_id == null && !$serviceInformation->hearse_id == null) {
            $serviceInformation->gallonsOfWater = $request->gallonsOfWater;
            $saved = $serviceInformation->save();

            if(!$saved) {
                return redirect()->back()->with('error', 'Something went wrong');
            }
            return redirect()->route('service.deceased', $serviceId);

        } else {
            return redirect()->back()->with('error', 'Please select a casket and a hearse first');
        }

    }
    public function deceased($serviceId)
    {
        $deceased = ServiceInformation::find($serviceId)->deceasedInformation;

        return view('service.deceased-info', [
            'serviceId' => $serviceId,
            'deceased' => $deceased,
            'page' => 'deceased'
        ]);
    }

    public function informant($serviceId)
    {
        $informant = ServiceInformation::find($serviceId)->informant;
        return view('service.informant-info', [
            'serviceId' => $serviceId,
            'informant' => $informant ,
            'page' => 'informant'
        ]);
    }

    public function inclusions($serviceId)
    {
        return view('service.inclusions', [
            'serviceId' => $serviceId,
            'serviceInfo' => ServiceInformation::find($serviceId),
            'page' => 'inclusions'
        ]);
    }

    public function otherServices($serviceId)
    {
        return view('service.other-services', [
            'serviceId' => $serviceId,
            'serviceInformation' => ServiceInformation::find($serviceId),
            'page' => 'others'
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
            'otherServices' => $serviceInformation->otherServices,
            'serviceId' => $serviceId
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
            'serviceId' => $serviceId,
            'hearses' => Hearse::all()
        ]);
    }

    public function flowers($serviceId) {
        return view('service.flowers', [
            'serviceId' => $serviceId
        ]);
    }

    public function recieved($serviceId) {
        return view('service.request-received', [
            'serviceId' => $serviceId
        ]);
    }

    public function submitRequest(Request $request, $serviceId) {
        $serviceInformation = ServiceInformation::find($serviceId);

        if(!$serviceInformation) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $serviceInformation->status = 'pending';
        $saved = $serviceInformation->save();

        if(!$saved) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->route('service.received', $serviceId);
    }

    public function setOtherServices(Request $request, $serviceId) {

        $serviceInformation = ServiceInformation::find($serviceId);

        if(!$serviceInformation) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $serviceInformation->other_services = $request->otherServices ? $request->otherServices : 'none';
        $saved = $serviceInformation->save();

        if(!$saved) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->route('service.summary', $serviceId);
    }


}
