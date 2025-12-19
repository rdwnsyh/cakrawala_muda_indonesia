<?php

namespace App\Http\Controllers;

use App\Models\JenisProgram;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $query = Program::query();
        
        // Filter by jenis program if provided
        if ($request->has('jenis')) {
            $query->whereHas('jenisProgram', function($q) use ($request) {
                $q->where('nama', $request->jenis);
            });
        }
        
        $programs = $query->orderBy('tanggal_mulai', 'desc')->paginate(12);
        
        // Get unique program types for filter
        $jenisPrograms = JenisProgram::whereHas('programs')
            ->pluck('nama')
            ->values();
            
        return view('programs.index', compact('programs', 'jenisPrograms'));
    }
    
    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('programs.show', compact('program'));
    }
}