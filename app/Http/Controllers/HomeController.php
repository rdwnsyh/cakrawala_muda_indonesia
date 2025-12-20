<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Berita;
use App\Models\JenisProgram;
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

        // Count program aktif untuk stats
        $activeProgramsCount = Program::where('status', 'aktif')->count();

        // Ambil jenis program dari tabel jenis_programs dengan count programs per status
        $jenisPrograms = JenisProgram::whereHas('programs')
            ->withCount([
                'programs',
                'programs as aktif_count' => function($query) {
                    $query->where('status', 'aktif');
                },
                'programs as segera_count' => function($query) {
                    $query->where('status', 'segera');
                },
                'programs as selesai_count' => function($query) {
                    $query->where('status', 'selesai');
                }
            ])
            ->get();

        // Ambil alumni dengan testimoni untuk ditampilkan
        $alumniTestimonials = Alumni::with('jenisProgram')
            ->whereNotNull('testimoni')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->get();

        $beritas = Berita::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('ongoingProgram', 'activeProgramsCount', 'jenisPrograms', 'alumniTestimonials', 'testimonials', 'beritas'));
    }
}