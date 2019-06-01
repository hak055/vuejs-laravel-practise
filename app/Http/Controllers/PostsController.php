<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	$data = request()->validate([
    				'caption' => 'required',
    				'image' => ['required', 'image'], 
    			]);
    	$imagePath = request('image')->store('upload/'.auth()->user()->username, 'public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
    	$image->save();

    	auth()->user()->posts()->create([
    			'caption' => $data['caption'],
    			'image' => $imagePath,
    	]);

    	return redirect('/profile/'.auth()->user()->id);
    }
    /**
    * Display the specified resource.
    *
    * @param string $slug
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    public function show($slug)
    {
        if (is_numeric($slug)) {
        // Get post for slug.
        $post = Post::findOrFail($slug);

        return Redirect::to(route('p.show', $post->slug), 301);
        }

        // Get post for slug.
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show', [
        'post' => $post
        ]);
                
    }
}
