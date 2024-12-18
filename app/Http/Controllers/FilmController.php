<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        // Query film dengan filter pencarian dan kategori
        $query = Film::with('category');

        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category_id') && $request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $films = $query->get();

        // Return data ke view
        return view('home', compact('categories', 'films'));
    }
    public function show($id)
    {
        $film = Film::with('category')->findOrFail($id);
        return view('detail', ['film' => $film]);
    }
}
