<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts=Post::paginate(7);
        return view('post', compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
       Post::create($request->all());
       return redirect('posts');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    
    public function update(Request $request, $id)
    {
        $post=Post::findOrFail($id);
        $post->update($request->all());
    }

   
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts');
    }
}
