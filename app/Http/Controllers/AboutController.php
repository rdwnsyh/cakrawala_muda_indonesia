<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about = [];
        $pengurus = Pengurus::orderBy('urutan', 'asc')->get();
        return view('aboutus.index', compact('about', 'pengurus'));
    }
}
