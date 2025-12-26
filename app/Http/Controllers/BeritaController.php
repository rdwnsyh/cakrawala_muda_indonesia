<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
  public function index(Request $request)
  {
    $query = Berita::query()
      ->orderBy('created_at', 'desc');

    // Search by title
    if ($request->has('search') && $request->search != '') {
      $query->where('title', 'like', '%' . $request->search . '%');
    }

    $beritas = $query->paginate(12);

    return view('berita.index', compact('beritas'));
  }

  public function show($slug)
  {
    $berita = Berita::where('slug', $slug)->firstOrFail();
    
    // Ambil berita terkait (3 berita terbaru selain yang sedang dibaca)
    $relatedBeritas = Berita::where('id', '!=', $berita->id)
      ->orderBy('created_at', 'desc')
      ->take(3)
      ->get();
    
    return view('berita.show', compact('berita', 'relatedBeritas'));
  }
}
