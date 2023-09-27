<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news-announcement.index', [
            'announcements' => Announcement::Latest()->paginate(5)
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news-announcement.create', [
            'announcements' => Announcement::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $announcementFields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Use 'images.*' to validate each image in the array
        ]);

       
        $announcement = Announcement::create($announcementFields);

         $imagePaths = [];
        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
               $path = $image->store('announcementImage', 'public'); // Store each image in the 'announcementImages' directory
               $imagePaths[] = $path;
               
               $announcement->images()->create([
                   'path' => $path
               ]);
            }
        }

        return redirect()->route('news-announcement.index')->with('success', 'Announcement has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('news-announcement.show', [
            'announcement' => $announcement
        ]);
    }

    public function welcomePageAnnouncements () {
        $announcements = Announcement::latest()->take(4)->get();
        return view('welcome', compact('announcements'));
    }

    public function browse() {
        return view('news-announcement.browse', [
            'announcements' => Announcement::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('news-announcement.edit', [
            'announcement' => Announcement::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $announcementFields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        if($request->hasFile('image')) {
            $announcementFields['image'] = $request->image->store('announcementImage', 'public');
        }

        $announcement = Announcement::findOrFail($id);
        $announcement->update($announcementFields);

        return redirect()->route('news-announcement.index')->with('success', 'Announcement has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($announcement)
    {
        $announcement = Announcement::findOrFail($announcement);
        $announcement->delete();

        return redirect()->route('news-announcement.index')->with('error', 'Announcement has been deleted successfully!');
    }
}
