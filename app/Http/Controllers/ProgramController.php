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
        
        // Ambil program sejenis (dari jenis_program_id yang sama)
        $relatedPrograms = Program::where('jenis_program_id', $program->jenis_program_id)
            ->where('id', '!=', $program->id)
            ->orderBy('tanggal_mulai', 'desc')
            ->take(3)
            ->get();
        
        return view('programs.show', compact('program', 'relatedPrograms'));
    }
    
    public function getRelatedPrograms(Request $request)
    {
        $jenisProgramId = $request->get('jenis_program_id');
        $excludeId = $request->get('exclude_id');
        $offset = $request->get('offset', 0);
        $limit = $request->get('limit', 3);
        
        $query = Program::where('jenis_program_id', $jenisProgramId)
            ->where('id', '!=', $excludeId)
            ->orderBy('tanggal_mulai', 'desc');
        
        // Get total count untuk cek hasMore
        $totalCount = $query->count();
        
        // Get programs dengan offset dan limit
        $programs = $query->skip($offset)->take($limit)->get();
        
        return response()->json([
            'programs' => $programs,
            'hasMore' => ($offset + $limit) < $totalCount
        ]);
    }
}