<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Jobs\FeaturedPost;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dispatch job to queue to make one post featured
        $featuredPost = (new FeaturedPost());
        $this->dispatch($featuredPost);

        // get all posts
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(3);

        // get featured post
        $featured = Post::where('featured', true)->get();
        return view('posts.index')->with(['posts' => $posts, 'featured' => $featured]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);       

        // get the filename
        $filename = $request->file('image')->getClientOriginalName();
        // upload image       
        $path = $request->file('image')->storeAs('/public/images/', $filename);

        // create post
        $post = new Post;
        $post->fill($request->all());
        $post->user_id = Auth::user()->id;
        $post->image = $filename;

        $post->save();

        return redirect()->route('posts.index')->with('message', 'Post successfully added!');
    }

    // json response
    public function getPostsJson(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
 
    }

    // xml response
    public function getPostsXML(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->xml($posts);
 
    }
}
