<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function admin()
    {
        return view('admin.app');
    }
    public function index()
    {
       
        $posts = DB::table('posts')->orderBy('id', 'desc')->limit(8)->get();
        return view('home', compact('posts'));
    }
    public function about()
    {
        return view('about');
    }

    public function readMore()
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(12);
        return view('readmore', compact('posts'));
    }
}