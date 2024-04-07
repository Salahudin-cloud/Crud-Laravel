<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UpdatePostController extends Controller
{
    public function index($slug)
    {
        $getPost = Post::where('slug', $slug)->first();
        return view('update_post', [
            'post' => $getPost
        ]);
    }

    public function updatePostAction(Request $request)
    {

        $post = Post::find($request->_uid);

        $post->title = $request->title;
        $post->body = $request->postText;
        $post->slug = Str::slug($request->title);

        $post->save();

        // redirec 
        return redirect()->to('/post/all_posts');
    }
}
