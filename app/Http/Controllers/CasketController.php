<?php

namespace App\Http\Controllers;

use App\Models\Casket;
use App\Models\Category;
use App\Models\CasketImages;
use Illuminate\Http\Request;
use App\Models\ServiceInformation;
use Illuminate\Support\Facades\Storage;

class CasketController extends Controller
{
    public function index()
    {
        return view('caskets.index', [
            'caskets' => Casket::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('caskets.create', [
            'categories' => Category::all()
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
        // dd($request->all());
        $casketFields = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        // Handle Cover Photo Upload
        // if ($request->hasFile('image')) {
        //     $coverPhoto = $request->file('image');
        //     $coverPhotoPath = $coverPhoto->store('cover_photos', 'public');
        //     $casketFields['image'] = $coverPhotoPath;
        // }
        if ($request->hasFile('image')) {
            $casketFields['coverPhoto'] = $request->file('image')->store('cover_photos', 'public'); 
        }

        $casket = Casket::create($casketFields);
        $categoryId = $request->input('category_id');
        $casket->categories()->attach($categoryId);

        // Handle Multiple Images Upload
        $imagePaths = [];
        if ($request->hasFile('images')) {
           $pathImages = $request->file('images');
           foreach($pathImages as $pathImage) {
                $path = $pathImage->store('casketImages', 'public');
                $imagePaths[] = $path;

                $casketImage = new CasketImages(['pathImages' => $path]);
                $casket->casketImages()->save($casketImage);
           }
        }

        return redirect()->route('casket.index')->with('success', 'Casket created successfully.');
    }

    public function edit($id)
    {
        $casket = Casket::find($id);
        return view('caskets.edit', [
            'casket' => $casket,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $casket = Casket::find($id);
        
        $casketFields = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        // Check if a new cover photo is uploaded
        if ($request->hasFile('image')) {
            // Delete the old cover photo if it exists
            if($casket->coverPhoto) {
                Storage::disk('public')->delete($casket->coverPhoto);
            }

            $coverPhoto = $request->file('image');
            $coverPhotoPath = $coverPhoto->store('cover_photos', 'public');
            $casketFields['coverPhoto'] = $coverPhotoPath;
        }

        
        $casket->update($casketFields);

        // Handle Multiple Images Upload
        if ($request->hasFile('images')) {
            // Delete the current multiple images
            foreach ($casket->casketImages as $casketImage) {
                Storage::disk('public')->delete($casketImage->pathImages);
                $casketImage->delete();
            }

            $imagePaths = [];
            $pathImages = $request->file('images');
            foreach($pathImages as $pathImage) {
                    $path = $pathImage->store('casketImages', 'public');
                    $imagePaths[] = $path;

                    $casketImage = new CasketImages(['pathImages' => $path]);
                    $casket->casketImages()->save($casketImage);
            }
        }
        

        return redirect()->route('casket.index')->with('success', 'Casket updated successfully.');



    }

    public function selectCasket(Request $request, $serviceId)
    {
        // dd($request->all());

        $serviceInformation = ServiceInformation::find($serviceId);
        

        if ($serviceInformation) {
            // Retrieve the selected casket's information
            $selectedCasket = Casket::find($request->casketId);

            if($selectedCasket) {
                // Check if selected casket if available
                if ($selectedCasket->is_available) {
                    // Deduct one from the selected casket's stock
                    $selectedCasket->stock--;

                    // Check if the selected casket is now out of stock
                    if ($selectedCasket->stock <= 0) {
                        // Set the selected casket's is_available to false
                        $selectedCasket->is_available = false;
                    } 

                    // Save the selected casket's information
                    $selectedCasket->save();
                }
            

            // Update the casket_id for the service
            $serviceInformation->casket_id = $request->casketId;
            $saved = $serviceInformation->save();

            if ($saved) {
                return redirect()->route('service.inclusions', $serviceId)
                ->with('success', 'Casket selected successfully.');
            } else {
                return redirect()->back()->with('Something went wrong.');
                }
            } else {
                return redirect()->back()->with('error', 'Selected casket is out of stock.');
            }
        } else {
            return redirect()->back()->with('error', 'Selected casket not found.');
        }
    } 

    public function destroy($id)
    {
        $casket = Casket::find($id);

        if (!$casket) {
            return redirect()->route('casket.index')->with('error', 'Casket not found.');
        }

        $casket->delete();

        return redirect()->route('casket.index')->with('success', 'Casket deleted successfully.');
    }
}