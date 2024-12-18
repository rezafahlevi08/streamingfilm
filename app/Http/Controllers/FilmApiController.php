<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;

class FilmApiController extends Controller
{
    public function getCategories()
    {
        return Category::all();
    }

    public function getFilms(Request $request)
    {
        $query = Film::with('category');

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        return $query->get();
    }

    public function getFilmDetails($id)
    {
        return Film::with('category')->findOrFail($id);
    }
}
