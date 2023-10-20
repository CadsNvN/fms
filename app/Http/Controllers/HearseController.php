<?php

namespace App\Http\Controllers;

use App\Models\Hearse;
use App\Models\HearseImages;
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

    public function index() {
        return view('hearse.index', [
            'hearses' => Hearse::latest()->paginate(5)
        ]);
    }

    public function create() {
        return view('hearse.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $hearse = new Hearse([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    
        // Handle Cover Photo Upload
        if ($request->hasFile('image')) {
            $hearse->coverPhoto = $request->file('image')->store('hearseCover_photos', 'public');
        }
    
        $hearse->save();
    
        // Handle Multiple Images Upload
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $pathImage) {
                $path = $pathImage->store('hearse_photos', 'public');
                $imagePaths[] = $path;
    
                $hearseImage = new HearseImages(['pathImages' => $path]);
                $hearse->hearseImages()->save($hearseImage);
            }
        }
    
        return redirect()->route('hearse.index')->with('success', 'Hearse created successfully.');
    }
}
