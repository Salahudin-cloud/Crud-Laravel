<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $data = Post::where('slug', '=', $slug)->first();

        return view('post', [
            'post' => $data
        ]);
    }
}
