<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index ()
    {
        return view('admin.destination.index');
    }

    public function create ()
    {
        return view('admin.destination.create');
    }
}
