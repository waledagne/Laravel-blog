<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->with(['user','likes'])->paginate(2);

        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function show(Post $post){

        return view('posts.show',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function edit(Post $post){
        //$posts = Post::find($post);

        return view('posts.edit',[
            'post' => $post,
        ]);
    }

    public function update(Post $post, Request $request){

        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->update($request->only('body'));

        return redirect('/posts');

    }

    public function destroy(Post $post){
        $post->delete();

    return back();

    }
}
