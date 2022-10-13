<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(12);
        $categories = Category::orderBy('name', 'asc')->get();
        return view('pages.post.list', compact('posts', 'categories'));
    }
    public function detail($id)
    {
        $post = Post::where('id', $id)->first();
        return view('pages.post.detail', compact('post'));
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('pages.post.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required|max:100|min:3',
        //     'price' => 'required',
        //     'image' => 'required|image',
        //     'description' => 'required'
        // ]);


        $image = $request->file('image')->store('public');
        Post::create([
            'category_id' => $request->category,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $image,
            'discription' => $request->discription,

        ]);
        return redirect()->back();
    }
}