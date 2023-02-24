<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\DestinationService;
use App\Models\Area;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    private $destinationService;

    function __construct(DestinationService $destinationService)
    {
        $this->destinationService = $destinationService;
    }

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
        $this->destinationService->create($request);
        return redirect()->route('dashboard.destination.index');
    }
}
