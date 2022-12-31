<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Get the list of post relavent to search.
     *
     * @param   Request  $request
     *
     * @return  json
     */
    public function __invoke(Request $request)
    {
        $posts = Post::search($request->search)
            ->query(function ($builder) {
                $builder->join('categories', 'posts.category_id', 'categories.id')
                    ->select('posts.id', 'posts.title', 'posts.body', 'categories.name AS category')
                    ->orderBy('posts.id', 'DESC');
            })
            ->get();

        return response()->json(data: $posts, status: 200);
        // return view('search', compact('posts'));
    }
}
