<?php


namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
    {
    public function index()
    {
        //Render a list of a resource.
        $posts = Post::latest()->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        //Show a single resource.
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        //Show a view to create a new resource.

    }

    public function store()
    {
        //Persist the new resource.
    }

    public function edit()
    {
        //Show a view to edit an existing resource.
    }

    public function update()
    {
        //Persist the edited resource.
    }

    public function destroy()
    {
        //Delete the resource.
    }
    }
