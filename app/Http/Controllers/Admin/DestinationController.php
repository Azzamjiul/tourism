<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index ()
    {
        $destinations = Destination::get();
        return view('dashboard.destination.index', compact('destinations'));
    }

    public function create ()
    {
        $areas = Area::select('id', 'name')->get();
        return view('dashboard.destination.create', compact('areas'));
    }

    public function store (Request $request)
    {
        // TODO: Add some validation
        
        Destination::create([
            'name' => $request->name,
            'area_id' => $request->area_id,
            'address' => $request->address,
            'address_url' => $request->address_url,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.destination.index');
    }
}
