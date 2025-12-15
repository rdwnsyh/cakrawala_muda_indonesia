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
        // Ambil program ongoing (status aktif, terbaru)
        $ongoingProgram = Program::where('status', 'aktif')
            ->orderBy('tanggal_mulai', 'desc')
            ->first();

        // Ambil jenis program unik untuk slider
        $jenisPrograms = Program::select('jenis_program', 'poster_jenis_program')
            ->distinct('jenis_program')
            ->whereNotNull('jenis_program')
            ->whereNotNull('poster_jenis_program')
            ->get();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->get();

        $beritas = Berita::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('ongoingProgram', 'jenisPrograms', 'testimonials', 'beritas'));
    }
}