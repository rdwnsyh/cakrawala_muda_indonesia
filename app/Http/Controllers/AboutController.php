<?php

namespace App\Http\Controllers;

// use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about = []; // About::first();
        return view('aboutus.index', compact('about'));
    }
}

