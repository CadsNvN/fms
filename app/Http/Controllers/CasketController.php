<?php

namespace App\Http\Controllers;

use App\Models\Casket;
use App\Models\CasketImages;
use App\Models\ServiceInformation;
use Illuminate\Http\Request;

class CasketController extends Controller
{
    public function index()
    {
        return view('casket.index', [
            'caskets' => Casket::latest()->paginate(10)->get()
        ]);
    }

    public function show($id)
    {
        $casket = Casket::find($id);
        return view('casket.show', [
            'casket' => $casket,
            'casketImages' => $casket->casketImages
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'firstName' => 'required',
        ]);
    }

    public function selectCasket(Request $request, $serviceId)
    {
        // dd($request->all());

        $serviceInformation = ServiceInformation::find($serviceId);

        if ($serviceInformation) {
            $serviceInformation->casket_id = $request->casketId;
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