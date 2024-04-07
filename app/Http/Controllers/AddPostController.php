<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class AddPostController extends Controller
{
    //index 
    public function index()
    {
        return view('add_post');
    }

    public function addPostAction(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->postText;
        $post->slug = Str::slug($request->title);

        $post->save();

        // redirec 
        return redirect()->to('/');
    }
}
