<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        $alumni = Alumni::with('program')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        // Count total alumni
        $totalAlumni = Alumni::count();

        // Count unique provinces (if you have province data, otherwise use placeholder)
        $totalProvinces = 25; // Placeholder, bisa diganti jika ada field provinsi

        return view('alumni.index', compact('alumni', 'totalAlumni', 'totalProvinces'));
    }
}

