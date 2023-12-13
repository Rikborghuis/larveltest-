<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Fetch all posts
        return view('Home', ['posts' => $posts]); // Pass the variable to the view
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $user->posts()->save($post);

        return redirect('NewFormPost')->with('status', 'New data');
    }


}
