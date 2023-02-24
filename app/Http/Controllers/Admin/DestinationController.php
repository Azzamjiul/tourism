<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\DestinationService;
use App\Models\Area;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    private $destinationService;

    function __construct(DestinationService $destinationService)
    {
        $this->destinationService = $destinationService;
    }

    public function index()
    {
        $destinations = Destination::with('user')->get();
        return view('dashboard.destination.index', compact('destinations'));
    }

    public function create()
    {
        $areas = Area::select('id', 'name')->get();
        return view('dashboard.destination.create', compact('areas'));
    }

    public function store(Request $request)
    {
        $peraturan = [
            'name' => ['required', 'min:5'],
            'alamat' => ['required', 'min:10'],
        ];

        $pesan = [
            "name.required" => 'Nama tidak boleh kosong, harus diisi gan',
            "name.min" => 'Nama minimal 5 huruf gan',
            "alamat.required" => 'Alamat tidak boleh kosong, harus diisi gan',
            "alamat.min" => 'Alamat minimal 10 huruf bro/sis',
        ];

        $validator = Validator::make($request->all(), $peraturan, $pesan);

        if ($validator->fails()) {
            return redirect()
                ->route('dashboard.destination.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();
        $this->destinationService->create($request, $user);
        return redirect()->route('dashboard.destination.index');
    }
}
