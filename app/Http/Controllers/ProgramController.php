<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $query = Program::query();
        
        // Filter by jenis program if provided
        if ($request->has('jenis')) {
            $query->where('jenis_program', $request->jenis);
        }
        
        $programs = $query->orderBy('tanggal_mulai', 'desc')->paginate(12);
        
        // Get unique program types for filter
        $jenisPrograms = Program::distinct('jenis_program')
            ->pluck('jenis_program')
            ->filter()
            ->values();
            
        return view('programs.index', compact('programs', 'jenisPrograms'));
    }
    
    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('programs.show', compact('program'));
    }
}