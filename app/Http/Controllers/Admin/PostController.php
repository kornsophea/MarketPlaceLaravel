<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $query = Post::query();
        $query->orderBy('id','desc');
        $posts=$query->paginate(20);
        return $posts;
    }
}