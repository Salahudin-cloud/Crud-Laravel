<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{
    //
    public function deletePostAction(Request $request)
    {
        Post::where('_id', $request->id)->delete();
        return redirect()->to('/post/all_posts');
    }
}
