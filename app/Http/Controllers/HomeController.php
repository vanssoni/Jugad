<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $posts = Post::orderby('created_at' , 'asc')->get();
        return view('welcome' , ['posts' => $posts]);
    }
}
