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

  // Show method removed - berita now links directly to external URLs
}
