<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        // return $posts->toArray();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required'
        ]);
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'author' => $request->get('author'),
        ]);

        $post->save();
        return redirect('/posts')->with('success', 'Prispevek je shranjen!!');
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();
        return view('posts.show', compact('post', 'comments'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required'
        ]);
        $post = Post::findOrFail($id);
        $post->title =  $request->get('title');
        $post->body = $request->get('body');
        $post->author = $request->get('author');
        $post->save();
        return redirect('/posts')->with('success', 'Prispevek je popravljen!');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Prispevek odstranjen!');
    }
}
