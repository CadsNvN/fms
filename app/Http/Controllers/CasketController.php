<?php

namespace App\Http\Controllers;

use App\Models\Casket;
use App\Models\CasketImages;
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
}
