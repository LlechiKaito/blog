<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index (Post $post)
    {
        return view('posts.index', [
            'posts' => $post->getPaginateByLimit()
        ]);
    }
    
    public function show (Post $post)
    {
        
        return view('posts.show', [
           'post' => $post 
        ]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store ( Post $post, PostRequest $request )
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit ( Post $post )
    {
        return view('posts.edit', [
           'post' => $post 
        ]);
    }
    
    public function update ( Post $post, PostRequest $request )
    {
        $input = $request['post'];
        $post->fill($input)->save();
        // update()を使うとupdated_atが更新される（他にも理由がある）
        return redirect('/posts/' . $post->id);
    }
    
    public function delete( Post $post )
    {
        $post->delete();
        return redirect('/posts');
    }
}
