<?php

namespace App\Http\Controllers;

use App\Helpers\PaginationHelper;
use App\Models\Post;
use Illuminate\Http\Request;

class AllPostController extends Controller
{
    public function index()
    {
        $all_data = Post::all();
        $paginatedData = PaginationHelper::paginate($all_data, 5);
        return view('all_post', [
            'paginated_data' => $paginatedData
        ]);
    }
}
