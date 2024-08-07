<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Display the search form
    public function showSearchForm()
    {
        return view('search.form');
    }

    // Handle the search request
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $query = $request->input('query');
        $posts = Post::where('title', 'like', "%{$query}%")->get();

        return view('search.results', ['posts' => $posts, 'query' => $query]);
    }
}
