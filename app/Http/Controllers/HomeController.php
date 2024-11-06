<?php

namespace App\Http\Controllers;
use App\Models\Post; // Make sure to import the Post model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    //index
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(5);
        return view('index',['posts' => $posts]);
    }

    //about
    public function about()
    {
        return view('about');
    }
    //contact
    public function contact()
    {
        return view('contact');
    }
    //createPosts
    public function createPosts()
    {
        return view('createPosts');
    }


    //store post
    public function opost(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subTitle' => 'required|string|max:255',
            'body' => 'required|string',
            'second_body' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
           $logoPath = null;
            if ($request->hasFile('logo')) {
                // Store the logo and get the file path
                $logoPath = $request->file('logo')->store('logos', 'public'); // Store in 'logos' folder within the public disk
            }
        // If validation passes, create the post
        $post = Post::create([
            'user_id' => 1, // Hardcoded user_id, replace with Auth::id() if using authentication
            'title' => $validated['title'],
            'subTitle' => $validated['subTitle'],
            'body' => $validated['body'],
            'second_body' => $validated['second_body'],
            'logo' => $logoPath, // Handle logo if necessary
            'url' => '',  // Handle URL if necessary
        ]);

        // Redirect to the newly created post
        return redirect()->route('home.post', ['id' => $post->id])->with('success', 'Post created successfully!');

    }


//post
    public function post($id)
    {
        $post = Post::with('user')->findOrFail($id); // Retrieves the post along with the author information
        return view('post', compact('post'));
    }


   //edit
   public function edit($id)
   {


       // Check if the user is authenticated
       if (Auth::guest()) {
           return redirect('/login');
       }

       // Fetch the post by ID
       $post = Post::findOrFail($id);

       // Check if the current user is the author of the post
    //    if ($post->user_id !== Auth::id()) {  // Compare user_id with the authenticated user's ID
    //     abort(403, 'Unauthorized action.');
    // }

       Gate::authorize('edit-post', $post);

       // Return the edit view with the post data
       return view('post.edit', compact('post'));
   }



//update
   public function update(Request $request, $id)
   {
    // Validate the input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'subTitle' => 'required|string|max:255',
        'body' => 'required|string',
        'second_body' => 'required|string',
    ]);

    // Fetch the post by ID
    $post = Post::findOrFail($id);

    // Update the post
    $post->update([
        'title' => $validated['title'],
        'subTitle' => $validated['subTitle'],
        'body' => $validated['body'],
        'second_body' => $validated['second_body'],
        // Optionally, update logo or other fields
    ]);

    // Redirect to the post page after successful update
    return redirect()->route('home.post', ['id' => $post->id])->with('success', 'Post updated successfully!');
   }
   public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('home.index')->with('success', 'Post deleted successfully');
    }


}
