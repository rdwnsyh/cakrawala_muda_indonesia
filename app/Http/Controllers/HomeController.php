<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Program;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::where('status', 'aktif')
            ->orderBy('tanggal_mulai', 'desc')
            ->take(3)
            ->get();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->get();

        $beritas = Berita::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('programs', 'testimonials', 'beritas'));
    }
}
