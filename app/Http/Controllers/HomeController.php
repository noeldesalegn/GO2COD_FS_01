<?php

namespace App\Http\Controllers;
use App\Models\Post; // Make sure to import the Post model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(5);
        return view('index',['posts' => $posts]);
    }
    public function post()
{
    $posts = Post::with('user')->get(); // Fetch posts from the database
    return view('post', compact('posts')); // Pass posts to the view
}
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
