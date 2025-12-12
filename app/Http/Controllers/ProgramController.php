<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $query = Program::query();

        if ($request->has('jenis') && $request->jenis != '') {
            $query->where('jenis_program', $request->jenis);
        }

        $programs = $query->orderBy('tanggal_mulai', 'desc')->paginate(9);

        return view('programs.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();

        return view('programs.show', compact('program'));
    }
}
