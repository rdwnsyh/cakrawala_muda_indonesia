<?php

namespace App\Http\Controllers;

// use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        $alumni = []; // Alumni::first();
        return view('alumni.index', compact('alumni'));
    }
}

